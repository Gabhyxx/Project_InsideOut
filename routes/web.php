<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [JournalController::class, "index"])->name("home") ;
