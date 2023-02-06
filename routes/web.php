<?php

use App\Http\Controllers\GradoviController;
use App\Http\Controllers\KorisniciController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductsController;
Use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('load');
});

 Route::get('/dashboard', function () {
     return view('after');
})->middleware(['auth', 'verified'])->name('after');

//Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

// Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
//     Route::get('/',[AdminController::class, 'index'])->name('index');
//     //Route::resource();
// });

Route::get('/zvonko', function () {
    return view('zvonko');
})->middleware(['auth', 'verified'])->name('zvonko');


Route::get('/load', function () {
    return view('load');
   
})->name('load');

Route::get('/fleet', function () {
    return view('fleet');
   
})->name('fleet');

Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/oznaci/{id}', [TodoListController::class, 'oznaci'])->name('oznaci');

Route::get('/logoutt', 'Controllers\ProfileController@logout')->name('logoutt');

Route::get('/korisnici',[KorisniciController::class, 'index'])->name('korisnici');

Route::get('/upload', function () {
    return view('upload');
   
})->name('upload');

Route::get('/prikazi', function () {
    return view('prikazi');
   
})->name('prikazi');

Route::post('/saveImage', [ImageController::class, 'saveImage'])->name('saveImage');

//Route::post('/products', [ImageController::class, 'store'])->name('products.store');

// Route::get('/cart', function () {
//     return view('cart.index');
   
// })->name('cart');

Route::resource('/products',ProductsController::class);
Route::get('izbrisi/{id}',[ProductsController::class, 'izbrisi'])->name('izbrisi');
Route::post('update/{id}',[ProductsController::class, 'update'])->name('update');
Route::post('update/{id}',[ProductsController::class, 'update'])->name('update');

Route::resource('users', KorisniciController::class);
Route::post('update',[KorisniciController::class,'update'])->name('update');


Route::get('/korisnici',[KorisniciController::class, 'index'])->name('korisnici');
Route::get('delete/{id}',[KorisniciController::class, 'delete'])->name('korisnicibrisi');
//Route::get('cart',[GradoviController::class, 'index'])->name('cart');
Route::resource('/cart', GradoviController::class);
//Route::post('Reservation',[ReservationController::class])->name('rezervacija');
//Route::post('create','ReservationController@store')->name('spremi');

Route::post('create','ReservationController@store')->name('spremi');
Route::post('create',[ReservationController::class,'store'])->name('spremi');

Route::get('reservation',[ReservationController::class, 'show'])->name('reservation');


Route::get('reservation/{id}',[ReservationController::class, 'potvrdi'])->name('potvrdi');

Route::get('reservationodbij/{id}',[ReservationController::class,'odbij'])->name('odbij');

Route::get('/kontakt',function (){
    return view('kontakt');
})->name('kontakt');
require __DIR__.'/auth.php';

Route::get('/kontakt1',function (){
    return view('kontakt1');
})->name('kontakt1');
require __DIR__.'/auth.php';
