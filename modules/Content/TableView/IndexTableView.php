<?php

namespace Modules\Content\TableView;

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
                        Text::make('template')->sortable(),
            Text::make('published')->sortable(),
            Text::make('category_id')->sortable(),
            RestfulButton::make('content')->except('view'),
        ];
    }
}
