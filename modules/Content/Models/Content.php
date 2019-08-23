<?php

namespace Modules\Content\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Content extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'content';

    protected $guarded = [];

    protected $searchableColumns = ["template", "published",];
}
