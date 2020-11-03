<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionDisplayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;

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

Route::get('/', [SectionDisplayController::class, 'welcome']) -> name('welcome');
Route::get('/section/{id}', [SectionDisplayController::class,'displaySection'])-> name('sections.show');
Route::get('/subsection/{id}', [ThreadController::class, 'subsectionThreadList']) -> name('thread.list.show');
Route::get('/thread/{id}', [ThreadController::class, 'showSingleThread']) -> name('single.thread.show');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
