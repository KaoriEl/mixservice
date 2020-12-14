<?php

use Illuminate\Support\Facades\Route;

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
})->middleware(['auth']);
Route::get('/maps', [\App\Http\Controllers\MapController::class, 'index'])->name('index');

Route::get('/exchange_rates', function () {
    return view('recipe.main');
});
Route::get('/NASA', function () {
    return view('comic.main');
});
Route::get('/news', function () {
    return view('news.main');
});
Route::get('/weather', [\App\Http\Controllers\WeatherController::class, 'index'])->name('index');




require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
