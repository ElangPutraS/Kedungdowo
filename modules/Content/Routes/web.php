<?php

Route::group(
    [
        'prefix'     => '',
        'as'         => '',
        'middleware' => ['web', 'auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('content', 'ContentController@index')->name('content.index');
        $router->get('content/create', 'ContentController@create')->name('content.create');
        $router->post('content', 'ContentController@store')->name('content.store');
        $router->get('content/{content}', 'ContentController@show')->name('content.show');
        $router->get('content/{content}/edit', 'ContentController@edit')->name('content.edit');
        $router->put('content/{content_page}', 'ContentController@update')->name('content.update');
        $router->delete('content/{content}', 'ContentController@destroy')->name('content.destroy');
    }
);
