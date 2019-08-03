<?php

namespace Modules\Page\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Page extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'pages';

    protected $guarded = [];

    protected $searchableColumns = ["name", "short", "desc", "created_by", "updated_by",];
}
