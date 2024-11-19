<?php

use App\Http\Controllers\Api\CategoryController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/projects", [ProjectController::class, "index"])->name("api.projects.index");
//Route::delete("/projects/{id}", [ProjectController::class, "destroy"])->name("api.projects.delete");

Route::get("/categories", [CategoryController::class, "index"])->name("api.categories.index");

