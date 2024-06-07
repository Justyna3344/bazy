<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlusController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TrasyPociagowController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WagonyController;
use App\Http\Controllers\LokomotywaController;
use App\Http\Controllers\PersonelController; 
use App\Http\Controllers\TrasaController;
use App\Http\Controllers\StacjeController;
use App\Http\Controllers\RelacjeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\PrzystanekController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Middleware\UserMiddleware;
use App\Http\Controllers\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsersmngrController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('pluses', PlusController::class);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/trasy-pociagow', [TrasyPociagowController::class, 'index']);
Route::post('/trasy-pociagow/szczegoly', [TrasyPociagowController::class, 'szczegoly'])->name('trasy_pociagow.szczegoly');
Route::get('/trasy-pociagow/szukaj', [TrasyPociagowController::class, 'szukaj'])->name('trasy_pociagow.szukaj');

Route::get('/kup-bilet', [TrasyPociagowController::class, 'kupBilet'])->name('kup_bilet');
Route::post('/kup-bilet', [TrasyPociagowController::class, 'kupBilet'])->name('trasy_pociagow.kup_bilet');


Route::get('/wagony', [WagonyController::class, 'index'])->name('wagony.index');
Route::get('/wagony/create', [WagonyController::class, 'create'])->name('wagony.create');
Route::post('/wagony', [WagonyController::class, 'store'])->name('wagony.store');
Route::get('/wagony/{wagony}/edit', [WagonyController::class, 'edit'])->name('wagony.edit');
Route::put('/wagony/{wagony}', [WagonyController::class, 'update'])->name('wagony.update');
Route::delete('/wagony/{wagony}', [WagonyController::class, 'destroy'])->name('wagony.destroy');

Route::get('/lokomotywa', [LokomotywaController::class, 'index'])->name('lokomotywa.index');
Route::get('/lokomotywa/create', [LokomotywaController::class, 'create'])->name('lokomotywa.create');
Route::post('/lokomotywa', [LokomotywaController::class, 'store'])->name('lokomotywa.store');
Route::get('/lokomotywa/{lokomotywa}/edit', [LokomotywaController::class, 'edit'])->name('lokomotywa.edit');
Route::put('/lokomotywa/{lokomotywa}', [LokomotywaController::class, 'update'])->name('lokomotywa.update');
Route::delete('/lokomotywa/{lokomotywa}', [LokomotywaController::class, 'destroy'])->name('lokomotywa.destroy');

Route::get('/personel', [PersonelController::class, 'index'])->name('Personel.index');
Route::get('/personel/create', [PersonelController::class, 'create'])->name('Personel.create');
Route::post('/personel', [PersonelController::class, 'store'])->name('Personel.store');
Route::get('/personel/{personel}/edit', [PersonelController::class, 'edit'])->name('Personel.edit');
Route::put('/personel/{personel}', [PersonelController::class, 'update'])->name('Personel.update');
Route::delete('/personel/{personel}', [PersonelController::class, 'destroy'])->name('Personel.destroy');

Route::get('/trasy', [TrasaController::class, 'index'])->name('trasy.index');

Route::get('/trasy/create', [TrasaController::class, 'create'])->name('trasy.create');
Route::post('/trasy', [TrasaController::class, 'store'])->name('Trasy.store');
Route::get('/trasy/{trasy}/edit', [TrasaController::class, 'edit'])->name('trasy.edit');
Route::put('/trasy/{trasy}', [TrasaController::class, 'update'])->name('trasy.update');
Route::delete('/trasy/{trasy}', [TrasaController::class, 'destroy'])->name('trasy.destroy');


Route::get('/stacje', [StacjeController::class, 'index'])->name('stacje.index');
Route::get('/stacje/create', [StacjeController::class, 'create'])->name('Stacje.create');
Route::post('/stacje', [StacjeController::class, 'store'])->name('Stacje.store');
Route::get('/stacje/{stacje}/edit', [StacjeController::class, 'edit'])->name('Stacje.edit');
Route::put('/stacje/{stacje}', [StacjeController::class, 'update'])->name('Stacje.update');
Route::delete('/stacje/{stacje}', [StacjeController::class, 'destroy'])->name('Stacje.destroy');

Route::get('/relacje', [RelacjeController::class, 'index'])->name('relacje.index');
Route::get('/relacje/create', [RelacjeController::class, 'create'])->name('relacje.create');
Route::post('/relacje', [RelacjeController::class, 'store'])->name('relacje.store');
Route::get('/relacje/{relacja}', [RelacjeController::class, 'show'])->name('relacje.show');
Route::get('/relacje/{relacja}/edit', [RelacjeController::class, 'edit'])->name('relacje.edit');
Route::put('/relacje/{relacja}', [RelacjeController::class, 'update'])->name('relacje.update');
Route::delete('/relacje/{relacja}', [RelacjeController::class, 'destroy'])->name('relacje.destroy');
Route::get('/relacje/{id}', [RelacjeController::class, 'show'])->name('relacje.show');

Route::get('/trasy/{id}/details', [TrasyPociagowController::class, 'showDetails'])->name('trasy.details');


Route::get('/routes/{calaTrasaId}/stops', [RouteController::class, 'showRouteStops'])->name('routes.stops');

Route::get('/przystanek', [PrzystanekController::class, 'index'])->name('przystanek'); // Zaktualizowano ścieżkę do kontrolera PrzystanekController
Route::get('/przystanki', [PrzystanekController::class, 'index'])->name('przystanki.index');
Route::get('/szczegoly', [SzczegolyController::class, 'index'])->name('szczegoly.index');

Route::get('usersmngr', [UsersmngrController::class, 'index'])->name('usersmngr.index');



Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

//Tickety i zarządzanie użytkownikami
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('tickets', [AdminController::class, 'tickets'])->name('tickets');
    Route::resource('tickets', TicketsController::class);
    Route::resource('usersmngr', UsersmngrController::class);
});

// User routes
Route::middleware(['auth', 'user'])->group(function(){
    Route::get('/home', [UserController::class, 'index'])->name('home');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('tickets', [AdminController::class, 'tickets'])->name('tickets');
    Route::resource('usersmngr', UsersmngrController::class);
});
