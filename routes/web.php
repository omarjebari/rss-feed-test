<?php

use App\Http\Controllers\RssFeedController;
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

Route::get('/', [RssFeedController::class, 'index'])->name('feeds.index');
Route::get('feeds/{feed}', [RssFeedController::class, 'show'])->name('feeds.show');
Route::post('feeds/import', [RssFeedController::class, 'import'])->name('feeds.import');
