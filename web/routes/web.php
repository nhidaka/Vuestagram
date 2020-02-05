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

// サーバからは、すべての URL で index テンプレートを返却
// {any?} ： 任意のパスパラメータ any を受け入れる
// '.+' :「任意の文字が一文字以上」つまり「なんでもいい」

Route::get('/{any?}', function () {
    return view('index')->where('any', '.+');
});

// アロー関数バージョンもメモ
// Route::get('/{any?}', fn() => view('index'))->where('any', '.+');

