<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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

// データを取得する
Route::get('/', [AuthorController::class, 'index']);
// データを追加する
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
// データを更新する
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
// データを削除する
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
// データを検索する
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
// リレーションを確認する
Route::get('/relation', [AuthorController::class, 'relate']);


// データを取得する
Route::get('/book', [BookController::class, 'index']);
// データを追加する
Route::get('/book/add', [BookController::class, 'add']);
Route::post('/book/add', [BookController::class, 'create']);

