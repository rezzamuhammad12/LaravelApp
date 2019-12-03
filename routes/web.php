<?php


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/students', 'StudentsController@index');

Route::get('/students/{student}', 'StudentsController@show');


// Route::get('/about', function () {
//     return view('about');
// });
