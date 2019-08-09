<?php

Route::group(
    [
        'prefix'     => '',
        'as'         => '',
        'middleware' => [],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('page', 'PageController@index')->name('page.index');
        $router->get('page/create', 'PageController@create')->name('page.create');
        $router->post('page', 'PageController@store')->name('page.store');
//        $router->get('page/{page}', 'PageController@show')->name('page.show');
        $router->get('page/{page}/edit', 'PageController@edit')->name('page.edit');
        $router->put('page/{page}', 'PageController@update')->name('page.update');
        $router->delete('page/{page}', 'PageController@destroy')->name('page.destroy');
    }
);
