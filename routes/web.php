<?php

use App\Http\Controllers\BcategoryController;
use App\Http\Controllers\BcommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BtagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TestimonialController;
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

Route::redirect('/', '/fr');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
    Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');

        /** BLOG CATEGORIES */
        Route::resource('bcategories', BcategoryController::class);

        /** BLOG TAGS */
        Route::resource('btags', BtagController::class);

        /** BLOGS */
        Route::resource('blogs', BlogController::class);

        /** BLOGS COMMENTS */
        Route::resource('bcomments', BcommentController::class);

        /** CONTACTS */
        Route::resource('contacts', ContactController::class);

        /** HEROS */
        Route::resource('heros', HeroController::class);

        /** FAQS */
        Route::resource('faqs', FAQController::class);

        /** FAQS */
        Route::resource('testimonials', TestimonialController::class);

        /** SPONSORS */
        Route::resource('sponsors', SponsorController::class);
    });
});



