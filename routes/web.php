<?php


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');


//Students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');


// Route::get('/about', function () {
//     return view('about');
// });
