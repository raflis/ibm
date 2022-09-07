<?php

use Illuminate\Support\Facades\Route;

Route::post('loginpost', [App\Http\Controllers\Admin\LoginController::class,'indexPost'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('login.logout');
Route::get('loginall', [App\Http\Controllers\Admin\LoginController::class,'indexall'])->name('login.all');
Route::resource('login', App\Http\Controllers\Admin\LoginController::class);
Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::resource('records', App\Http\Controllers\Admin\RecordController::class)->only(['index']);
    Route::get('records/excel', [App\Http\Controllers\Admin\RecordController::class, 'excel'])->name('records.excel');
    Route::get('records_replay', [App\Http\Controllers\Admin\RecordController::class,'replay'])->name('records.replay');
    Route::resource('point_users', App\Http\Controllers\Admin\PointUserController::class);
    Route::resource('points', App\Http\Controllers\Admin\PointController::class);
});
