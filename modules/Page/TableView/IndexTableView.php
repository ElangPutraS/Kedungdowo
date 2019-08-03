<?php

namespace Modules\Page\TableView;

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
            Text::make('name')->sortable(),
            Text::make('short')->sortable(),
            Text::make('desc')->sortable(),
            Text::make('created_by')->sortable(),
            Text::make('updated_by')->sortable(),
            RestfulButton::make('page'),
        ];
    }
}
