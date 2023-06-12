<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AppliesController;
use App\Http\Controllers\OtherAppliesController;
use App\Http\Controllers\StatsController;

use Illuminate\Support\Facades\Route;


//Show index page
Route::get('/', [PostsController::class, 'index']);

//Show all posts
Route::get('/posts', [PostsController::class, 'all']);

//Load create page
Route::get('/posts/create', [PostsController::class, 'create']);

//Store new post
Route::post('/posts/{post}', [PostsController::class, 'store']);

//Show one item
Route::get('/posts/{post}', [PostsController::class, 'show']);

//Apply to post
Route::post('/apply/{post}', [PostsController::class, 'apply']);

//Report a post
Route::post('/posts/report/{post}', [PostsController::class, 'report']);

//=====User routes=======

//Load register forms
Route::get('/register', [UsersController::class, 'register']);

//Save registered user
Route::post('/register/{user}', [UsersController::class, 'store']);

//Load login forms
Route::post('/authenticate/{user}', [UsersController::class, 'authenticate']);

Route::post('/logout', [UsersController::class, 'logout']);


//=====Page routes=======

//Show profile page
Route::get('/profile/{user}', [PagesController::class, 'profile']);

//======SETTINGS ROUTES======

//Show settings page
Route::get('/settings', [SettingsController::class, 'index']);

//Store settings page
Route::post('/settings/{bio}', [SettingsController::class, 'store']);

//=====MY APPLIED ROUTES=====
Route::get('/myapplied/{user}', [AppliesController::class, 'index']);

//=====APPLIED ROUTES=====
Route::get('/applied', [OtherAppliesController::class, 'index']);

//===STATS ROUTES=====
Route::get('/stats', [StatsController::class, 'index']);

//===Admin Routes===

Route::get('/admin', [AdminController::class, 'index'])->middleware('is_admin');
Route::get('/admin/newposts', [AdminController::class, 'newPosts'])->middleware('is_admin');
Route::post('/admin/newpost/{id}', [AdminController::class, 'accept'])->middleware('is_admin');
Route::delete('/admin/newpost/delete/{id}', [AdminController::class, 'destroyNewPost'])->middleware('is_admin');
Route::get('/admin/reports', [AdminController::class, 'reports'])->middleware('is_admin');
Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->middleware('is_admin');

