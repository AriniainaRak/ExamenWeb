<?php

use App\Http\Controllers\MyController;
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

Route::get('/liste', [MyController::class, 'liste']);
Route::get('/detail/{id}', [MyController::class, 'detailArticle']);
Route::get('/connect', [MyController::class, 'dbConnect']);
Route::get('/home',[MyController::class, 'home']);
Route::get('/admin',function(){return view('pages.login');});
Route::get('/adminforce',[MyController::class, 'admin']);
Route::post('/login','MyController@verifier')->name('verifier.login');
Route::get('/newarticle',[MyController::class ,'insertArticle'])->name('insertion');