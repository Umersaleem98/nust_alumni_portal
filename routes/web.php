<?php

use App\Http\Controllers\Home\About\AboutController;
use App\Http\Controllers\Home\AlumNust\AlumNustController;
use App\Http\Controllers\Home\Events\EventController;
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

Route::get('/events/alumevent-calendar', [EventController::class, 'AlumEventCalendar']);
Route::get('/events/reunions', [EventController::class, 'Reunions']);
Route::get('/events/homecoming', [EventController::class, 'Homecoming']);
Route::get('/events/iftar-meetups', [EventController::class, 'IftarMeetups']);
Route::get('/events/alumnust-day', [EventController::class, 'AlumNUSTDay']);

Route::get('alumnust/association', [AlumNustController::class, 'AlumNUST']);
Route::get('alumnust/international-chapters', [AlumNustController::class, 'Association']);
Route::get('alumnust/national-chapters', [AlumNustController::class, 'InternationalChapters']);
Route::get('alumnust/featured', [AlumNustController::class, 'NationalChapters']);
Route::get('alumnust/in-memory', [AlumNustController::class, 'InMemoryOf']);


