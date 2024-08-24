<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get("/",[AppController::class,"home"])->name("home");
Route::get("/about",[AppController::class,"about"])->name("about");
Route::get("/courses",[AppController::class,"courses"])->name("courses");
Route::get("/activities",[AppController::class,"activities"])->name("activities");
Route::get("/contact",[AppController::class,"contact"])->name("contact");
