<?php

namespace Modules\Page\TableView;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Page\Columns\PageButton;

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
            Text::make('slug', 'Kode')->sortable()->setHeaderAttributes(['width' => '300px']),
            Text::make('category_title', 'Kategori'),
            Text::make('status', 'Status'),
            PageButton::make('page')->except('view'),
        ];
    }
}
