<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoggingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\User;

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
    return view('users.log-in');
})->name("login");

Route::post("/users/authenticate", [User::class, "authenticate"]);

Route::middleware("auth")->group(function () {

    Route::get("/admin", [AdminController::class, "index"])->name("admin");
    Route::get("/teacher", [TeacherController::class, "index"])->name("teacher");
    Route::get("/student", [StudentController::class, "index"])->name("student");
});

/* Route::get("/home", [User::class, "index"])->middleware("auth")->name("home"); */

Route::post('/logout', [User::class, "logout"]);
