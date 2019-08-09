<?php

Route::group(
    [
        'prefix'     => '',
        'as'         => '',
        'middleware' => [],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('menu', 'MenuController@index')->name('menu.index');
        $router->get('menu/create', 'MenuController@create')->name('menu.create');
        $router->post('menu', 'MenuController@store')->name('menu.store');
        $router->get('menu/{menu}', 'MenuController@show')->name('menu.show');
        $router->get('menu/{menu}/edit', 'MenuController@edit')->name('menu.edit');
        $router->put('menu/{menu}', 'MenuController@update')->name('menu.update');
        $router->delete('menu/{menu}', 'MenuController@destroy')->name('menu.destroy');
    }
);
