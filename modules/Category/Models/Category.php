<?php

namespace Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Category extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'categories';

    protected $guarded = [];

    protected $searchableColumns = ["title", "slug",];
}
