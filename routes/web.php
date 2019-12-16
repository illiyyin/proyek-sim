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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/detailcourses', function () {
//     return view('detailcourses');
// })->name('addcourses')->middleware('auth');

// Route::post('/detailcourses', 'DetailcoursesController@save')->name('DetailcoursesController.save');

Route::resource('detailcourses', 'DetailcoursesController')->middleware('auth');
// Debugging only
// Route::get('/landing', function() {
//     return view('landing');
// });

// Route::get('/tesdashboard', function(){
//     return view('tesdashboard');
// });

