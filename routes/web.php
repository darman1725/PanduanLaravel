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
  // --------------PENULISAN BENAR------------//
  /* Contoh Menambahkan String pada route get / */
  //  return "My name is Darman";


  // --------------PENULISAN SALAH---------//
  /* Contoh Penulisan view yang salah / */
    //return view('welcome.blade.php');
  // Alasannya salah dikarenakan titik(.) menandakan letak sebuah folder,
  // Bukan name file. Sehingga nama file ditulis tanpa ekstensi
  /* Contoh Penulisan view yang benar / */
     // return view('welcome');

  // return view('1/2/3/title');
  
  //return view('home');
});

// Route::get('/home', function() {
//     return view ('home');
// });


// // Cara melakukan parsing data dan menampilkannya pada view profil -> Versi 1
// Route::get('/profil', function() {
//     $name = "Darman";
//     return view ('profile',  [
//         'name' => $name
//     ]);
  
// });


// Cara melakukan parsing data dan menampilkannya pada view profil -> Versi 2
// Route::get('/profil', function() {
//     $name = "Darman";
//     return view('profile', compact('name'));
// });
//compact dipakai jika properties dan value sama


// Cara melakukan parsing data dan menampilkannya pada view profil -> Versi 3
// $appName = "Laravel 8";
// Route::view('/', 'home', ['appName' => $appName ]);