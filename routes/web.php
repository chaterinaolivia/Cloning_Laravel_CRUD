<?php 
 
use App\Http\Controllers\EventController; 
use App\Http\Controllers\TicketController; 
use Illuminate\Support\Facades\Route; 
 
 
Route::get('/', function () { 
    return view('dashboard'); 
}); 

Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::post('/event', [EventController::class, 'update'])->name('event.update');

Route::resource('/event', EventController::class); 
Route::resource('/ticket', TicketController::class);