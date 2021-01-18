<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

// home 
Route::get('/', function () {
    return view('welcome');
});

// tutorials 
Route::get("/tutorials", function(){
	return view('pages.tutorials');
});

// about us
Route::get("/about", function(){
	return view('pages.about');
});

// contact us
Route::get("/contact", function(){
	return view('pages.contact');
});

//admin route
Route::get("admin",[adminController::class,'renderAdmin'])->name('admin');

//login admin
Route::get("admin/login", function(){
	return view('admin.login'); 
})->middleware('alreadyLogined');

Route::post("admin/login", [adminController::class,"login"])->name('admin.login')->middleware('alreadyLogined');

// register admin
Route::get("admin/register", function(){
	return view('admin.register'); 
})->middleware('loginCheck');

Route::post("admin/register", [adminController::class,"create"])->name('admin.register')->middleware('loginCheck');

// admin dahboard
Route::get("admin/dashboard", function(){
	return view('admin/dashboard');
})->middleware('loginCheck');

// logout admin
Route::get("admin/logout", [adminController::class,'logout'])->name('admin.logout')->middleware('loginCheck');
