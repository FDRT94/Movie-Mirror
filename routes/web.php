<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;

route::get('/', [MoviesController::class, 'index'])->name('movies.index');
route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
