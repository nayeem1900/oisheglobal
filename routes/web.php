<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[FrontendController::class, 'index'])->name('frontend.index');


Route::get('/user_info/view', [HomeController::class, 'viewUserInfo'])->name('userinfo.view');
Route::get('/user_info/add', [HomeController::class, 'addUserInfo'])->name('userinfo.add');
Route::post('/user_infostore', [HomeController::class, 'storeUserInfo'])->name('userinfo.store');
Route::get('/user_info/edit{id}', [HomeController::class, 'editUserInfo'])->name('userinfo.edit');
Route::post('/user_info/update{id}', [HomeController::class, 'updateBranch'])->name('userinfo.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
    Route::get('/user_info/view', [HomeController::class, 'viewUserInfo'])->name('userinfo.view');
    Route::get('/user_info/add', [HomeController::class, 'addUserInfo'])->name('userinfo.add');
    Route::post('/user_infostore', [HomeController::class, 'storeUserInfo'])->name('userinfo.store');
    Route::get('/user_info/edit{id}', [HomeController::class, 'editUserInfo'])->name('userinfo.edit');
    Route::post('/user_info/update{id}', [HomeController::class, 'updateBranch'])->name('userinfo.update');


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
    //Agent
    Route::get('/agent/view', [HomeController::class, 'viewAgent'])->name('agent.view');
    Route::get('/agent/add', [HomeController::class, 'addAgent'])->name('agent.add');
    Route::post('/agent/store', [HomeController::class, 'storeAgent'])->name('agent.store');
    Route::get('/agent/edit{id}', [HomeController::class, 'editAgent'])->name('agent.edit');
    Route::post('/agent/update{id}', [HomeController::class, 'updateAgent'])->name('agent.update');


});
/*Route::get('/admin/dashboard', [HomeController::class, 'index'])->middleware(['auth','admin']);*/

//Passenger User


