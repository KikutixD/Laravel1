<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [siteController::class, 'index']);

// Route::get('/', function () {

//     return 'estou no router web.php';
//     //return view('welcome');
// });
