<?php

namespace Modules\Category\TableView;

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
            Text::make('title', 'Judul')->sortable()->setHeaderAttributes(['width' => '260px']),
            Text::make('slug', 'Slug')->sortable()->setHeaderAttributes(['width' => '260px']),
            Text::make('parent_title', 'Parent Kategori')
                ->setHeaderAttributes(['class' => 'ui center aligned'])
                ->setCellAttributes(['class' => 'ui center aligned']),
            RestfulButton::make('category')->except('view')
                ->setCellAttributes(['class' => 'ui center aligned']),
        ];
    }
}
