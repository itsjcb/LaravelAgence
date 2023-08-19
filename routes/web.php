<?php

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
//prefixer par admin avec nom par defaut prefixer par admin.
Route::prefix('admin')->name('admin.')->group(function(){
    // definir l'ensemble avec la function
    Route::resource('property', \App\Http\Controllers\Admin\PropertyController::class)->except(['show']);

});
