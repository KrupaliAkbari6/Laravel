<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\VisitController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hospital/about',[HospitalController::class,'about'])->name('hospital.about');
Route::get('/hospital/contact',[HospitalController::class,'contact'])->name('hospital.contact');
Route::get('/hospital/trash',[HospitalController::class,'trash'])->name('hospital.trash');
Route::post('/hospital/recover/{id}',[HospitalController::class,'recover'])->name('hospital.recover');
Route::resource('hospital',HospitalController::class);
Route::resource('visit',VisitController::class)->only(['store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
