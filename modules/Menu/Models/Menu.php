<?php

namespace Modules\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Menu extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'menus';

    protected $guarded = [];

    protected $searchableColumns = ['title', 'url'];

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            Menu::menuUpdate();
        });

        self::updated(function ($model) {
            Menu::menuUpdate();
        });

        self::deleted(function ($model) {
            Menu::menuUpdate();
        });
    }

    public static function menuUpdate()
    {
        $menu = json_encode(
            Menu::with('childrenRecursive')
                ->whereNull('parent_id')
                ->orderBy('title')
                ->get()
                ->toArray()
        );
        setting()->set('Home Portal', $menu);
        $settings = setting()->save();
    }

    public function getParentTitleAttribute()
    {
        $parent = $this->parent->title ?? ' - ';

        return $parent;
    }

    public function getLocationTitleAttribute()
    {
        $location = 'Home Portal';

        return $location;
    }

    // loads only direct children - 1 level
    public function children()
    {
        return $this->hasMany('Modules\Menu\Models\Menu', 'parent_id');
    }

    // recursive, loads all descendants
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    // parent
    public function parent()
    {
        return $this->belongsTo('Modules\Menu\Models\Menu', 'parent_id');
    }

    // all ascendants
    public function parentRecursive()
    {
        return $this->parent()->with('parentRecursive');
    }
}
