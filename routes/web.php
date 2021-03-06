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
// Main Routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

// Updates Routes
Route::get('/updates','UpdatesController@index')->name('updates.index');

// Projects routes
Route::get('/projects', 'ProjectsController@index')->name('projects.index');
// Route::get('/projects/{cat}', 'ProjectsController@index')->name('projects.index');
Route::get('/webdev', 'ProjectsController@webdev')->name('projects.webdev');
Route::get('/php', 'ProjectsController@php')->name('projects.php');
Route::get('/react', 'ProjectsController@react')->name('projects.react');
Route::get('/vuejs', 'ProjectsController@vuejs')->name('projects.vuejs');
Route::get('/nodejs', 'ProjectsController@nodejs')->name('projects.nodejs');

// MySQL data routes
Route::post('/editProject', 'ProjectsController@edit')->name('projects.edit');
Route::post('/createProject', 'ProjectsController@create')->name('projects.create');
Route::post('/storeProject/{contact_id}', 'AddressController@store')->name('projects.store');
Route::post('/delete/{id}', 'ProjectsController@delete')->name('projects.delete');

Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::resource('projects', 'ProjectsController');
