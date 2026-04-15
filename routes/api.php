<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\PlantController;
// use App\Http\Controllers\UserConrtoller;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/user", function(){});

Route::get("/sample", function(){
    return response()->json([
        "message" => "This is a sample API endpoint"
    ]);
});
