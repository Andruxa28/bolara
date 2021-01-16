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

//Route::get('/', function () {
//
//    return view('layout');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index')->name('home');

Route::get('/go', 'GoController@index')->name('go');
Route::get('/step1', 'GoController@step1')->name('step1');
Route::get('/step2', 'GoController@step2')->name('step2');

Route::get('/microcredit/{slug}', 'CompanyController@show')->name('microcredit.single');
Route::get('/microcredit', 'CompanyController@mfo')->name('mfo_list');


Route::get('/banks', 'CompanyController@bank')->name('bank_list');
Route::get('/banks/{slug}', 'CompanyController@show')->name('company.single');


// ----- INFO PAGES ------//
Route::get('/contacts', 'InfoController@contacts')->name('contacts');
Route::get('/zgoda', 'InfoController@zgoda')->name('zgoda');

// ----- BLOG ------//
Route::get('/blog/{slug}', 'BlogController@category')->name('blog_cat');
Route::get('/blog/{slug}/{slug2}', 'BlogController@single')->name('blog_single');
Route::get('/blog', 'BlogController@list')->name('blog');

// ----- SHOWCASE PAGES ------//

Route::get('/online-credit', 'ShowcaseController@online_credit')->name('online-credit');
Route::get('/interest-free-online-credit', 'ShowcaseController@showcase')->name('interest-free-online-credit');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'admin'], function(){
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories',  'CategoryController');
    Route::resource('/articles',  'ArticleController');
    Route::resource('/blog',  'BlogController');
    Route::get('/showcase', 'ShowcaseController@index')->name('admin.showcase');
});



//------ ERRORS---------//
Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);
