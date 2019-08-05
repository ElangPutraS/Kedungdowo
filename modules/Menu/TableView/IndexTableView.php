<?php

namespace Modules\Menu\TableView;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;

class IndexTableView extends TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('title')->sortable(),
            Text::make('url')->sortable(),
            Text::make('parent_id')->sortable(),
            Text::make('location')->sortable(),
            RestfulButton::make('menu'),
        ];
    }
}
