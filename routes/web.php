<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('jobs', JobController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);