<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

// ルート
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

// メモ編集
Route::get('/edit/{memo_id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

// メモ編集画面更新
Route::post('/update/{memo_id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

// メモ削除
Route::delete('/memos/{memo_id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');
