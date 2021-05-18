<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/','App\Http\Controllers\Frontend\HomeController');
Route::get('product/single/{id}','Frontend\ProductController@getProduct')->name('products.single');
Route::get('category/single/{id}','Frontend\ProductController@categoryProduct')->name('category.single');
Route::get('category/{id}','Frontend\ProductController@getProductByCategory')->name('category.index');
Route::prefix('api')->group(function () {
    Route::get('/products/{id}','Frontend\ProductController@apiGetProduct');
    Route::get('/sort-products/{id}/{sort}/{paginate}','Frontend\ProductController@apiGetSortedProduct');
    Route::get('/category-attribute/{id}','Frontend\ProductController@apiGetCategoryAttributes');
    Route::get('/filter-products/{id}/{sort}/{paginate}/{attributes}','Frontend\ProductController@apiGetFilterProducts');
});
