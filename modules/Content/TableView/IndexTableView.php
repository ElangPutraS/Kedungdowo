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
            Text::make('title', 'Judul')->sortable(),
            Text::make('slug', 'Kode')->sortable(),
            Text::make('template')->sortable(),
            Text::make('status'),
            Text::make('category_title', 'Kategori')->sortable('category_id'),
            RestfulButton::make('content')->except('view'),
        ];
    }
}
