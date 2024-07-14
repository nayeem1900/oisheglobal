<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[FrontendController::class, 'index'])->name('frontend.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







require __DIR__.'/auth.php';

Route::middleware('auth','admin')->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.index');

    Route::get('/branch/view', [HomeController::class, 'viewBranch'])->name('branch.view');
    Route::get('/branch/add', [HomeController::class, 'addBranch'])->name('branch.add');
    Route::post('/branch/store', [HomeController::class, 'store'])->name('branch.store');
    Route::get('/branch/edit{id}', [HomeController::class, 'editBranch'])->name('branch.edit');
    Route::post('/branch/update{id}', [HomeController::class, 'updateBranch'])->name('branch.update');
//Country
    Route::get('/country/view', [HomeController::class, 'viewCountry'])->name('country.view');
    Route::get('/country/add', [HomeController::class, 'addCountry'])->name('country.add');
    Route::post('/country/store', [HomeController::class, 'storeCountry'])->name('country.store');
    Route::get('/country/edit{id}', [HomeController::class, 'editCountry'])->name('country.edit');
    Route::post('/country/update{id}', [HomeController::class, 'updateCountry'])->name('country.update');
});
/*Route::get('/admin/dashboard', [HomeController::class, 'index'])->middleware(['auth','admin']);*/
