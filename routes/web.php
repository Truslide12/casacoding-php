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
Route::get('/updates','UpdatesController@updates.index')->name('updates');

// Projects routes
Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/webdev', 'ProjectsController@webdev')->name('projects.webdev');
Route::get('/php', 'ProjectsController@php')->name('projects.php');
Route::get('/react', 'ProjectsController@react')->name('projects.react');
Route::get('/nodejs', 'ProjectsController@nodejs')->name('projects.nodejs');


// MySQL data routes
Route::get('/editProject', 'ProjectsController@edit')->name('projects.edit');
Route::get('/createProject', 'ProjectsController@create')->name('projects.create');
Route::post('/storeProject/{contact_id}', 'AddressController@store')->name('projects.store');
Route::get('/delete/{id}', 'ProjectsController@delete')->name('projects.delete');

Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::resource('projects', 'ProjectsController');
