<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\MobileController;
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

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);



Route::middleware('log')->group(function () {

    Route::controller(HelloController::class)->group(function () {
        Route::get("/hello", "index");
        Route::get(
            "/user/{id}/comments/{comments}",
            "showUser"
        )->whereNumber("comments");

        Route::get('/hello/hi', "helloHi");
    });


    Route::view("/welcome", "welcome");
    Route::redirect("/hi", "/hello");
});

Route::prefix("admin", function () {
    Route::get("/hello", [HelloController::class, "index"]);
    Route::get('/hello/hi', [HelloController::class, "helloHi"]);
});

Route::prefix("user")->group(function () {
    Route::get("/hello", [HelloController::class, "index"]);
    Route::get('/hello/hi', [HelloController::class, "helloHi"]);
});

Route::resource('laptop', LaptopController::class)->middleware('auth');
Route::resource('mobile', MobileController::class)->middleware('auth');

Route::get('mobiles', [MobileController::class, 'layoutDemo']);
Route::get('mobiles/new', [MobileController::class, 'layoutDemoNew'])
    ->name('mobile.new');


require __DIR__ . '/auth.php';
