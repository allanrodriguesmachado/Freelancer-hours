<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::view('/','projects.index');

Route::get('/', [ProjectsController::class, 'index']);
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('project.show');
