<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiExternaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\LoginController;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('login');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('main');
});

Route::middleware(['auth'])->group(function () {


    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('role:alumno|profesor|administrador');
    Route::get('/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit')->middleware('role:administrador');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update')->middleware('role:administrador');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('role:administrador');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('role:administrador');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('role:administrador');
    Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('role:administrador');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware('role:administrador');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('role:administrador');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('role:profesor|administrador');
    Route::get('/articles/{id}', [ArticleController::class, 'edit'])->name('articles.edit')->middleware('role:administrador');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update')->middleware('role:administrador');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy')->middleware('role:administrador');

    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store')->middleware('role:profesor|administrador');
    Route::get('/courses/{id}', [CourseController::class, 'edit'])->name('courses.edit')->middleware('role:administrador');
    Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update')->middleware('role:administrador');
    Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy')->middleware('role:administrador');

    Route::get('/download-pdf', [CourseController::class, 'generar_pdf'])->name('descargar-pdf')->middleware('role:profesor|administrador');

    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
    Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store')->middleware('role:profesor|administrador');
    Route::get('/activities/{id}', [ActivityController::class, 'edit'])->name('activities.edit')->middleware('role:administrador');
    Route::put('/activities/{id}', [ActivityController::class, 'update'])->name('activities.update')->middleware('role:administrador');
    Route::delete('/activities/{id}', [ActivityController::class, 'destroy'])->name('activities.destroy')->middleware('role:administrador');
    Route::get('/actdownload-pdf', [ActivityController::class, 'actgenerar_pdf'])->name('actdescargar-pdf')->middleware('role:alumno|profesor|administrador');

    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index')->middleware('role:administrador');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store')->middleware('role:administrador');
    Route::get('/roles/{id}', [RoleController::class, 'edit'])->name('roles.edit')->middleware('role:administrador');
    Route::put('/roles/{id}', [RoleController::class, 'update'])->name('roles.update')->middleware('role:administrador');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('role:administrador');

    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('role:profesor|administrador');
    Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware('role:profesor|administrador');
    Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit')->middleware('role:administrador');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update')->middleware('role:administrador');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('role:administrador');
});

    Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/api_externa/nasa', [ApiExternaController::class, 'obtenerDatosNasa']);

Route::get('/api_externa/nasa', function () {
    return view('api_externa.nasa'); })->name('api_externa.nasa');

