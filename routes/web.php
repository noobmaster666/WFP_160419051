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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    $tambahan = ['coklat', 'keju', 'sosis'];
    return view('menu', ['tambahan' => $tambahan]);
})->name("menu");

Route::get('/menu/{jenis?}/{tambahan?}', function ($jenis = 'roti', $tambahan = 'coklat') {
    return view('roti', ['jenis' => $jenis, 'tambahan' => $tambahan]);
});

// Route::get('/helloworld', function () {
//     return 'Hello World, Pak Dosen';
// });

// Route::view('/selamatdatang', 'welcome');
// Route::view('/welcome', 'welcome');

// Route::get('/user/{id}', function ($id) {
//     return "User ".$id;
// });

// Route::get('/users/{name?}', function ($name = 'John') {
//     return $name;
// });

// Route::get('/mhs/{name?}', function ($name1 = 'Aditya Wijaya') {
//     echo "Hello ".$name1."!";
// })->name("mhs");

// Route::get('/greeting/{name?}', function ($name = "Semua") {
//     return view('welcome', ['name' => $name]);
// })->name("showgreeting");
