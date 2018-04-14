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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('article')->group(function () {
    Route::get('/', 'ArticleController@article_list');
    Route::get('create', 'ArticleController@article_create');
    Route::post('create', 'ArticleController@article_insert');
    Route::get('edit/{id}', 'ArticleController@article_edit');
    Route::post('edit', 'ArticleController@article_update');
    Route::get('detail', 'ArticleController@article_detail');
    Route::get('hapus/{id}', 'ArticleController@article_delete');
});
