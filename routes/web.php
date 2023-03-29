<?php

use App\Http\Controllers\FonctionnaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UpdatePassword;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('/directeur',function(){
    return view('directeur');
})->name('directeur')->middleware('directeur');

Route::get('/chefService',function(){
    return view('chefService');
})->name('chefService')->middleware('chefService');

Route::get('/fonctionnaireDash',function(){
    return view('fonctionnaireDash');
})->name('fonctionnaireDash')->middleware('fonctionnaire');


Route::post('user/password',[UserController::class,'updatPassword'])->name('updatePassword');

Route::resource('fonctionnaire',FonctionnaireController::class);

Route::resource('service',ServiceController::class);
Route::resource('user',UserController::class);

Route::get('remplirRapport',[RapportController::class,'index'])->name('RemplirRapport');
Route::post('storRapport',[RapportController::class,'index'])->name('StorRapport');


