<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // ✅ Import the controller

Route::get('/', function () {
    return redirect('/posts'); // ✅ Only keep one return
});

Route::resource('posts', PostController::class); // ✅ This now works
