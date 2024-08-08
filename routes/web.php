<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\lab5Controller;
use App\Mail\OrderShipped;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function () {
    Mail::to('chienphpd07890@fpt.edu.vn')->send(new OrderShipped());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// lab5

Route::get('/huuchien/ds', [lab5Controller::class, 'index'])->middleware('auth', 'Quantri');

Route::get('/huuchien/them', [lab5Controller::class, 'them']);
Route::post('/huuchien/them', [lab5Controller::class, 'them_']);

Route::get('/huuchien/xoa/{id}', [lab5Controller::class, 'xoa']);

Route::get('/huuchien/capnhat/{id}', [lab5Controller::class, 'capnhat']);
Route::post('/huuchien/capnhat/{id}', [lab5Controller::class, 'capnhat_']);

Route::get('/thongbao', function () {
    return view('thongbao');
});


//lab7

Route::get("hs",[App\Http\Controllers\HsController::class,'hs']);
Route::post("hs",[App\Http\Controllers\HsController::class,'hs_store'])->name('hs_store');


Route::get("sv",[App\Http\Controllers\SvController::class,'sv']);
Route::post("sv",[App\Http\Controllers\SvController::class,'sv_store']) ->name('sv_store');

//lab 8
Route::resource('products',ProductController::class);
