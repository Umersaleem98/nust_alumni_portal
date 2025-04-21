<?php

use App\Http\Controllers\Home\About\AboutController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-rector-address', [AboutController::class, 'RectorAddress']);
Route::get('/about-mission-vission', [AboutController::class, 'MissionVision']);
Route::get('/about-leadership', [AboutController::class, 'Leadership']);
Route::get('/about-staff-directory', [AboutController::class, 'StaffDirecory']);