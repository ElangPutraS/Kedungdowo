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
            Numbering::make('No')->setCellAttributes([
                'style' => 'background-color:white',
                'class' => 'ui center aligned',
            ]),
            Text::make('title', 'Judul')->sortable()->setHeaderAttributes(['width' => '300px']),
            Text::make('url', 'URL')->sortable(),
            Text::make('parent_title', 'Parent Menu')
                ->setHeaderAttributes(['class' => 'ui center aligned'])
                ->setCellAttributes(['class' => 'ui center aligned']),
            Text::make('location_title', 'Lokasi'),
            RestfulButton::make('menu')->except('view'),
        ];
    }
}
