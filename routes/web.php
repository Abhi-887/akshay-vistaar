<?php

use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\MenuBuilderController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\FronendController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FronendController::class,'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**Menu-builder */
Route::get('menu-builder',[MenuBuilderController::class, 'index' ])->name('menu-builder.index');


/**contact-us */
Route::get('contact-us',[ContactUsController::class, 'index' ])->name('contact-us.index');

/**admin-contact-us */
Route::get('contact',[AdminContactUsController::class, 'index' ])->name('contact-admin.index');
Route::put('contact',[AdminContactUsController::class, 'update' ])->name('contact-admin.update');


/**admin-hero section */
Route::get('hero',[HeroSectionController::class, 'index' ])->name('hero.index');
Route::put('hero',[HeroSectionController::class, 'update' ])->name('hero.update');

/**admin-about section */
Route::get('aboutus',[AboutSectionController::class, 'index' ])->name('about.index');
Route::put('aboutus',[AboutSectionController::class, 'update' ])->name('about.update');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
