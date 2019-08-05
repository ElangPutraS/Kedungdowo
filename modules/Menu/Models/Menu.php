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

    protected $searchableColumns = ["title", "url", "location",];
}
