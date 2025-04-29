<?php

use App\Http\Controllers\Home\About\AboutController;
use App\Http\Controllers\Home\Resources\ResourcesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-rector-address', [AboutController::class, 'RectorAddress']);
Route::get('/about-mission-vission', [AboutController::class, 'MissionVision']);
Route::get('/about-leadership', [AboutController::class, 'Leadership']);
Route::get('/about-staff-directory', [AboutController::class, 'StaffDirecory']);


Route::get('/resources/alumcard', [ResourcesController::class, 'AlumCard']);
Route::get('/resources/campus-facilities', [ResourcesController::class, 'CampusFacilities']);
Route::get('/resources/life-long-learning', [ResourcesController::class, 'LifeLongLearning']);
Route::get('/resources/alumcard-discounts', [ResourcesController::class, 'AlumcardDiscounts']);
Route::get('/resources/transcript-degree-verification', [ResourcesController::class, 'TranscripDdegreeVerification']);


