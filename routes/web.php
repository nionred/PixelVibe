<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
route::get('v_cat',[AdminController::class,'v_cat'])->middleware(['auth','admin']);
route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
route::get('delete_cat/{id}',[AdminController::class,'delete_cat'])->middleware(['auth','admin']);
route::get('up_cat/{id}',[AdminController::class,'up_cat'])->middleware(['auth','admin']);
route::post('upd_cat/{id}',[AdminController::class,'upd_cat'])->middleware(['auth','admin']);
route::get('add_pro',[AdminController::class,'add_pro'])->middleware(['auth','admin']);
route::post('upload',[AdminController::class,'upload'])->middleware(['auth','admin']);
route::get('v_pro',[AdminController::class,'v_pro'])->middleware(['auth','admin']);
route::get('del_pro/{id}',[AdminController::class,'del_pro'])->middleware(['auth','admin']);
route::get('up_pro/{id}',[AdminController::class,'up_pro'])->middleware(['auth','admin']);
route::post('upd_pro/{id}',[AdminController::class,'upd_pro'])->middleware(['auth','admin']);
route::get('src',[AdminController::class,'src'])->middleware(['auth','admin']);
route::get('details/{id}',[HomeController::class,'details']);
route::get('add/{id}',[HomeController::class,'add'])->middleware(['auth','verified']);
route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth','verified']);


