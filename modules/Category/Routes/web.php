<?php

Route::group(
    [
        'prefix'     => '',
        'as'         => '',
        'middleware' => ['web', 'auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('category', 'CategoryController@index')->name('category.index');
        $router->get('category/create', 'CategoryController@create')->name('category.create');
        $router->post('category', 'CategoryController@store')->name('category.store');
        $router->get('category/{category}', 'CategoryController@show')->name('category.show');
        $router->get('category/{category}/edit', 'CategoryController@edit')->name('category.edit');
        $router->put('category/{category}', 'CategoryController@update')->name('category.update');
        $router->delete('category/{category}', 'CategoryController@destroy')->name('category.destroy');
    }
);
