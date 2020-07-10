<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'roles',
        'roles' => ['admin'],
        'name' => 'admin.',
        'namespace' => 'Admin'
    ], function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::resource('/user', 'UsersController');
        Route::resource('/project', 'ProjectController');
        Route::resource('/download', 'DownloadController')->only(['store', 'update', 'destroy']);
    });

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/{id?}', 'HomeController@project')->name('project_id');
    Route::get('download/{download?}', 'HomeController@fileDownload')->name('download');
});


