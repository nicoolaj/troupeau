<?php
use App\Http\Controllers\Api\AnimalController;
use Illuminate\Support\Facades\Route;

Route::apiResource('animals', AnimalController::class);