<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/welcome','welcome');

Route::view('/contact','mycontact',[
    "pagetitle" => "Kontakku",
    "maintitle" => "My Contact"

]);

Route::get('/', function () {
    return view('index',
    [
        "pagetitle" => "Home",
        "maintitle" => "My Personal Library"
     ]
    );
});

Route::get('/test', function () {
    return view('indextest',
    [
        "pagetitle" => "Home",
        "maintitle" => "My Personal Library"
     ]
    );
});

// Route::get('/tentangperpus', function () {
//     return view('about');
// });

Route::view('/tentangperpus', 'about',
 [
    "pagetitle" => "This Page is About Me",
    "maintitle" => "Take a Look"
 ]
);
