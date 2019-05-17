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
    return 'Đây là trang chủ';
});
Route::get('admin', function () {
    return 'Đây là trang admin';
});
Route::get('danh-muc','CategoryController@index');
Route::get('san-pham','ProductController@index');
Route::get('them-san-pham','ProductController@AddPage');
Route::get('them-danh-muc','CategoryController@AddPage');
Route::post('saveCategories','CategoryController@store');
Route::post('saveProduct','ProductController@store');
Route::get('tai-khoan','UserController@index');
// Route::get('save','CategoryController@store');
// Route::get('geta', function(){
//     $danhmuc = App\Categories::all()->toArray();
//     var_dump($danhmuc);
// });
