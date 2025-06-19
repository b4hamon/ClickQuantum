<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCourseController;
use App\Http\Controllers\ApiCategoryController;
use App\Http\Controllers\ApiArticleController;

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

Route::get('/api_externa/nasa', function () {
    $apiKey = 'DEMO_KEY'; 
    $response = Http::get("https://api.nasa.gov/planetary/apod?api_key=$apiKey");
    if ($response->successful()) {
        return $response->json();
    }
    return response()->json(['error' => 'No se pudieron obtener datos'], 500);
});

Route::get('/courses', [ApiCourseController::class, 'index'])->name('courses.index'); 
Route::post('/courses', [ApiCourseController::class, 'store'])->name('courses.store'); 
Route::get('/courses/{id}', [ApiCourseController::class, 'edit'])->name('courses.edit'); 
Route::put('/courses/{id}', [ApiCourseController::class, 'update'])->name('courses.update');  
Route::delete('/courses/{id}', [ApiCourseController::class, 'destroy'])->name('courses.destroy'); 

Route::get('/categories', [ApiCategoryController::class, 'index'])->name('categories.index'); 
Route::post('/categories', [ApiCategoryController::class, 'store'])->name('categories.store'); 
Route::get('/categories/{id}', [ApiCategoryController::class, 'edit'])->name('categories.edit'); 
Route::put('/categories/{id}', [ApiCategoryController::class, 'update'])->name('categories.update');  
Route::delete('/categories/{id}', [ApiCategoryController::class, 'destroy'])->name('categories.destroy'); 

Route::get('/articles', [ApiArticleController::class, 'index'])->name('articles.index'); 
Route::post('/articles', [ApiArticleController::class, 'store'])->name('articles.store'); 
Route::get('/articles/{id}', [ApiArticleController::class, 'edit'])->name('articles.edit'); 
Route::put('/articles/{id}', [ApiArticleController::class, 'update'])->name('articles.update');  
Route::delete('/articles/{id}', [ApiArticleController::class, 'destroy'])->name('articles.destroy'); 

