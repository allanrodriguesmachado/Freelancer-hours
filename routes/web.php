<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::view('/','projects.index');
Route::view('/project/{id}','projects.show')->name('project.show');
