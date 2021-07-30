<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
        Route::get('/', 'DashboardController@index')->name('/');

        // Artist
        Route::get('category', 'CategoryController@index')->name('category');
        Route::get('category/create', 'CategoryController@create')->name('category.create');
        Route::post('category', 'CategoryController@store')->name('category.store');
        Route::get('category/edit/{category}', 'CategoryController@edit')->name('category.edit');
        Route::put('category', 'CategoryController@update')->name('category.update');
        Route::delete('category', 'CategoryController@delete')->name('category.delete');

        // Post
        Route::get('post', 'PostController@index')->name('post');
        Route::get('post/create', 'PostController@create')->name('post.create');
        Route::post('post', 'PostController@store')->name('post.store');
        Route::get('post/edit/{post}', 'PostController@edit')->name('post.edit');
        Route::put('post', 'PostController@update')->name('post.update');
        Route::delete('post', 'PostController@delete')->name('post.delete');

        // Photo
        Route::get('photo', 'PhotoController@index')->name('photo');
        Route::get('photo/create', 'PhotoController@create')->name('photo.create');
        Route::post('photo', 'PhotoController@store')->name('photo.store');
        Route::get('photo/edit/{photos}', 'PhotoController@edit')->name('photo.edit');
        Route::put('photo', 'PhotoController@update')->name('photo.update');
        Route::delete('photo', 'PhotoControllers@delete')->name('photo.delete');

        // Album
        Route::get('album', 'AlbumController@index')->name('album');
        Route::get('album/create', 'AlbumController@create')->name('album.create');
        Route::post('album', 'AlbumController@store')->name('album.store');
        Route::get('album/edit/{album}', 'AlbumController@edit')->name('album.edit');
        Route::put('album', 'AlbumController@update')->name('album.update');
        Route::delete('album', 'AlbumController@delete')->name('album.delete');

        

       
    });
});
