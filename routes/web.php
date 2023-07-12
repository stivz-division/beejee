<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
use Src\Routing\Route;

return [
  Route::get('/', [MainController::class, 'index']),
  Route::get('/login', [AuthController::class, 'index']),
  Route::post('/login', [AuthController::class, 'login']),
  Route::post('/logout', [AuthController::class, 'logout']),
  Route::post('/task/store', [TaskController::class, 'store']),
  Route::post('/task/update', [TaskController::class, 'update']),
];