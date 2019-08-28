<?php

namespace Modules\Content\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Modules\Category\Models\Category;
use Modules\Page\Models\Page;
use Sofa\Eloquence\Eloquence;

class Content extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'content';

    protected $guarded = [];

    protected $searchableColumns = ["title"];


    public function category()
    {
        return $this->belongsTo('Modules\Category\Models\Category', 'category_id');
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

    public function getListAttribute()
    {
        $categories = Category::with('childrenRecursive')->where('id', $this->category_id)->first()->toArray();
        $category_list[] = $categories['id'];

        return $this->structure($categories, $category_list);
    }

    public function getPagesAttribute()
    {
        $pages = Page::whereIn('category_id', $this->list)->where('published', 1)->whereNull('deleted_at')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();

        return $pages;
    }

    public function structure($categories, $category_list)
    {
        if (! empty($categories['children_recursive'])) {
            $categories = $categories['children_recursive'];
            foreach ($categories as $cat) {
                $category_list[] = $cat['id'];
                $category_list = $this->structure($cat, $category_list);
            }
        }

        return $category_list;
    }
}
