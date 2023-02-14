<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Management\PermissionController;
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

require __DIR__ . "/Auth/AuthRoute.php";

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("auth")->group(function () {
    Route::get("/permissions", PermissionController::class)->name("permissions.index");
    Route::get("/dashboard", DashboardController::class)->name("dashboard.index");
});
