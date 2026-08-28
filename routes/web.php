<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog.html', function () {
    return view('pages.blog');
});
Route::get('/gallery.html', function () {
    return view('pages.gallery');
});
Route::get('/gioi-thieu.html', function () {
    return view('pages.gioi-thieu');
});
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/lien-he.html', function () {
    return view('pages.lien-he');
});
Route::get('/others-news.html', function () {
    return view('pages.others-news');
});
Route::get('/san-pham.html', function () {
    return view('pages.san-pham');
});
Route::get('/tra-xanh-pt11.html', function () {
    return view('pages.tra-xanh-pt11');
});
Route::get('/vietnam-green-tea-bps-pro106.html', function () {
    return view('pages.vietnam-green-tea-bps-pro106');
});
Route::get('/vietnam-green-tea-dust-pro104.html', function () {
    return view('pages.vietnam-green-tea-dust-pro104');
});
Route::get('/vietnam-green-tea-f-pro108.html', function () {
    return view('pages.vietnam-green-tea-f-pro108');
});
Route::get('/vietnam-green-tea-madina-pro103.html', function () {
    return view('pages.vietnam-green-tea-madina-pro103');
});
Route::get('/vietnam-green-tea-op-pro107.html', function () {
    return view('pages.vietnam-green-tea-op-pro107');
});
Route::get('/vietnam-green-tea-ps-pro105.html', function () {
    return view('pages.vietnam-green-tea-ps-pro105');
});



use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Inertia\Inertia;



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
