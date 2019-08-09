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
            Numbering::make('No')->setCellAttributes([
                            'style' => 'background-color:white',
                            'class' => 'ui center aligned'
            ]),
                        Text::make('title')->sortable(),
            Text::make('slug')->sortable(),
            Text::make('short_desc')->sortable(),
            Text::make('description')->sortable(),
            Text::make('created_by')->sortable(),
            Text::make('updated_by')->sortable(),
            Text::make('published')->sortable(),
            Text::make('category_id')->sortable(),
            RestfulButton::make('page')->except('view'),
        ];
    }
}
