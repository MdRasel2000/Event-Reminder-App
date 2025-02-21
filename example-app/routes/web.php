<?php

use App\Http\Controllers\eventController;
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

Route::get('/', function () {
    return view('welcome');
});




//Event Route;

Route::get('/create-event', [eventController::class, 'createEvent']);
Route::post('/store-event',[ eventController::class, 'storeEvent']);
Route::get('/show-event', [eventController::class, 'showEvent']);
Route::get('/delete-event/{id}', [eventController::class, 'deleteEvent']);
Route::get('/edit-event/{id}', [eventController::class, 'editEvent']);
Route::post('/update-event/{id}', [eventController::class, 'updateEvent']);
