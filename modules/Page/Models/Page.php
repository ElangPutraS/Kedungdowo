<?php

namespace Modules\Page\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Page extends Model implements HasMedia
{
    use AutoSort, AutoFilter, HasMediaTrait;
    use Eloquence;

    protected $table = 'pages';

    protected $guarded = [];

    protected $searchableColumns = ['title'];

    protected $casts = [
        'published' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            if (Auth::user()) {
                $model->created_by = auth()->user()->id;
                $model->updated_by = auth()->user()->id;
            }
            $model->slug = time() . '-' . Str::slug($model->title);
        });

        self::updating(function ($model) {
            $model->slug = time() . '-' . Str::slug($model->title);
            $model->updated_by = auth()->user()->id;
        });
    }

    public function category()
    {
        return $this->belongsTo('Modules\Category\Models\Category', 'category_id');
    }

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }

    public function getStatusAttribute()
    {
        $status = $this->published ? 'Published' : 'Not Published';
        $status = $this->deleted ? 'Deleted' : $status;

        return $status;
    }

    public function getCategoryTitleAttribute()
    {
        $category = $this->category->title ?? ' - ';

        return $category;
    }

    public function getMadeByAttribute()
    {
        $user = $this->createdBy->name;

        return $user;
    }

    public function getEditedByAttribute()
    {
        $user = $this->updatedBy->name;

        return $user;
    }

    public function getCreatedDateAttribute()
    {
        $date = Carbon::createFromTimeString($this->date)->format('d F Y');

        return $date;
    }

    public function getPageFilesAttribute()
    {
        $page_files = [];
        $files = $this->getMedia('pages');
        foreach ($files as $file) {
            $page_files[] = url('media/' . $file->id . '/' . $file->file_name);
        }

        return $page_files;
    }

    public static function groupData($slug = null, $cat = null)
    {
        $pages = Page::with('category')
            ->where('published', 1)
            ->where('deleted', 0)
            ->orderBy('created_at')
            ->get();
        $data = [
            'faq' => [],
            'berita' => [],
            'galeri' => [],
            'slideshow' => [],
            'aktor_role' => [],
            'news_ticker' => [],
            'procurepedia' => [],
            'profil_ppsdm' => [],
        ];

        foreach ($pages as $page) {
            $category = strtolower($page->category->title);

            foreach ($data as $key => $d) {
                if (strpos($category, str_replace('_', ' ', $key)) !== false) {
                    $page->file = $page->page_files[0] ?? null;
                    $data[$key][] = $page;
                }
            }

            if ($slug && $slug == $page->slug && strpos($category, $cat) !== false) {
                $page->file = $page->page_files[0] ?? null;
                $data['page'] = $page;
            }
        }

        if ($slug && empty($data['page'])) {
            abort(404);
        }

        return $data;
    }

    public static function singleData($slug = null, $cat = null, $file = true, $varname = null)
    {
        $pages = Page::with('category')
            ->where('published', 1)
            ->where('deleted', 0)
            ->orderBy('created_at')
            ->get();
        $data = [];
        $cat = Str::slug($cat);

        foreach ($pages as $page) {
            $category = strtolower($page->category->slug);

            if (is_array($cat)) {
                foreach ($cat as $key => $c) {
                    if (strpos($category, $key) !== false) {
                        if ($file) {
                            $page->file = $page->page_files[0] ?? null;
                        }
                        $data[Str::slug($key, '_')][] = $page;
                    }
                }
            } else {
                if (strpos($category, $cat) !== false) {
                    if ($file) {
                        $page->file = $page->page_files[0] ?? null;
                    }
                    $data[Str::slug($varname ?? $cat, '_')][] = $page;
                }
            }

            if ($slug && $slug == $page->slug && strpos($category, $cat) !== false) {
                if ($file) {
                    $page->file = $page->page_files[0] ?? null;
                }
                $data['page'] = $page;
            }
        }

        if ($slug && empty($data['page'])) {
            abort(404);
        }

        return $data;
    }

    public static function getPageWithSlug($title, $category)
    {
        $data = Page::where('slug', Str::slug($title))
            ->where('deleted', 0)
            ->where('published', 1)
            ->whereHas('category', function ($q) use ($category) {
                $q->where('slug', Str::slug($category));
            })->first();

        return $data;
    }
}
