<?php

use App\Events\MessageNotification;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;

use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // require_once("././phpunit.xml");
});

Route::get("/aws", [Home::class, 'index']);


Route::prefix('user')->name('user')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::view('/login', 'user.login')->name('login');
        Route::view('/register', 'user.register')->name('register');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/home', 'user.home')->name('home');
    });
});



Route::get('/event', function () {
    $text = Str::random(40) . "==" . $i;
    event(new MessageNotification($text));
});

Route::get("/listen", function () {
    return view('listen');
});
