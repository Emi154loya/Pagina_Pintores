<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //Formulario

    Route::get('/', 'PaintController@login');

    Route::post('/inicio', 'PaintController@validar');

    //Pintores

    Route::get('/inicio', [
        'uses' => 'PaintController@inicio',
        'as' => 'Inicio'
    ]);

    Route::get('/vincent', [
        'uses' => 'PaintController@vincent',
        'as' => 'Vincent']
    );

    Route::get('/leonardo', [
        'uses' => 'PaintController@leonardo',
        'as' => 'Leonardo'
    ]);

    Route::get('/claude', [
        'uses' => 'PaintController@claude',
        'as' => 'Claude'
    ]);

    Route::get('/john', [
        'uses' => 'PaintController@john',
        'as' => 'John'
    ]);
