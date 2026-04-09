<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('student',function(){})->name('naresh');
// Route::resource('country', CountryController::class);

/* Show all countries */
// Route::method('url',pointing)->name('route_name);
Route::get('/country', [CountryController::class, 'index'])->name('country.index');
/* Store new country */
Route::post('/country', [CountryController::class, 'store'])->name('country.store');
/* Show create form */
Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
/* Show single country */
Route::get('/country/{country}', [CountryController::class, 'show'])->name('country.show');
/* Update country */
Route::put('/country/{country}', [CountryController::class, 'update'])->name('country.update');
/* Delete country */
Route::delete('/country/{country}', [CountryController::class, 'destroy'])->name('country.destroy');
/* Edit form */
Route::get('/country/{country}/edit', [CountryController::class, 'edit'])->name('country.edit');