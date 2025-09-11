<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/projects/{project}', [PortfolioController::class, 'showProject']);

Route::get('/contact', [ContactController::class, 'store']);