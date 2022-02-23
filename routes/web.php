<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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


Route::get('/index', [Home::class, 'home']);
Route::redirect('/', "https://www.educastudio.com/");
Route::prefix("product")->group(function () {
    Route::get("/marbel-edu-games",[ProductController::class, 'product1'] );
    Route::get("/marbel-and-friends-kids-games",[ProductController::class, 'product2'] );
    Route::get("/riri-story-books",[ProductController::class, 'product3'] );
    Route::get("/kolak-kids-songs",[ProductController::class, 'product4'] );
});
Route::get('/news/{topik}', function ($id) {
    return redirect ('https://www.educastudio.com/news/'.$topik);
    });
    Route::prefix("program")->group(function () {
        Route::get('/kari', function(){
            return redirect("https://www.educastudio.com/program/karir");
        });
        Route::get('/magang', function(){
            return redirect("https://www.educastudio.com/program/magang");
        });
        Route::get('/kunjunganindustri', function(){
            return redirect("https://www.educastudio.com/program/kunjungan-industri");
        });
    });
    Route::redirect('/about', "https://www.educastudio.com/about-us");
    
    Route::resource('/contact-us', ContactController::class, [
        'only' => ['index']
    ]);