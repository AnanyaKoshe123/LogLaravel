<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::middleware("auth")->group(function ()
{
    Route::view("/","welcome")->name("home");
});
Route::get('/login',[AuthController::class,'login'])->name("login");
Route::post('/',[AuthController::class,'loginPost'])->name("login.post");
Route::get('/register',[AuthController::class,'register'])->name("register");
Route::post('/register',[AuthController::class,'registerPost'])->name("register.post");
Route::get('/insert',[EmployeeController::class,'create'])->name("insert");
?>























              