<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenderController;
use App\Http\Controllers\MsgController;

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



Route::get("/", [RenderController::class, "index"])->name("welcome");
Route::post("/post/msg/", [MsgController::class, "insertMsg"])->name("post.message");
