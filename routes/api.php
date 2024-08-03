<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('categories',[CategoryController::class,'index'])->middleware('auth:api');
Route::post('category/check/title',[CategoryController::class,'checkTitle'])->middleware('auth:api');
Route::post('category/check/slug',[CategoryController::class,'checkSlug'])->middleware('auth:api');
Route::post('category/store',[CategoryController::class,'store'])->middleware('auth:api');
Route::get('category/{id}/show',[CategoryController::class,'show']);
Route::post('category/edit/check/title',[CategoryController::class,'checkEditTitle'])->middleware('auth:api');
Route::post('category/edit/check/slug',[CategoryController::class,'checkEditSlug'])->middleware('auth:api');
Route::post('category/update',[CategoryController::class,'update'])->middleware('auth:api');
Route::post('category/remove',[CategoryController::class,'remove'])->middleware('auth:api');
Route::get('category/{keyword}/search',[CategoryController::class,'searchCategory']);

Route::get('articles',[ArticleController::class,'index'])->middleware('auth:api');
Route::post('article/check/title',[ArticleController::class,'checkTitle'])->middleware('auth:api');
Route::post('article/check/category',[ArticleController::class,'checkCategory'])->middleware('auth:api');
Route::post('article/check/body',[ArticleController::class,'checkBody'])->middleware('auth:api');
Route::post('article/store',[ArticleController::class,'store'])->middleware('auth:api');
Route::get('article/{id}/show',[ArticleController::class,'show']);
Route::post('article/update',[ArticleController::class,'update'])->middleware('auth:api');
Route::post('article/remove',[ArticleController::class,'remove'])->middleware('auth:api');
Route::get('article/{keyword}/search',[ArticleController::class,'searchArticle']);
Route::get('article/{id}/comments',[ArticleController::class,'comments']);

Route::get('comments',[CommentController::class,'index'])->middleware('auth:api');
Route::post('comment/check/comment',[CommentController::class,'checkComment'])->middleware('auth:api');
Route::post('comment/check/article',[CommentController::class,'checkArticle'])->middleware('auth:api');
Route::post('comment/store',[CommentController::class,'store'])->middleware('auth:api');
Route::get('comment/{id}/show',[CommentController::class,'show']);
Route::post('comment/{id}/update',[CommentController::class,'update'])->middleware('auth:api');
Route::post('comment/{id}/remove',[CommentController::class,'remove'])->middleware('auth:api');

Route::get('authors',[AuthorController::class,'index'])->middleware('auth:api');
Route::post('author/check/name',[AuthorController::class,'checkName']);
Route::post('author/check/email',[AuthorController::class,'checkEmail']);
Route::post('author/check/password',[AuthorController::class,'checkPassword']);
Route::post('register',[AuthorController::class,'register']);
Route::post('login',[AuthorController::class,'login']);
Route::get('author/detail',[AuthorController::class,'getAuthor'])->middleware('auth:api');
Route::post('logout',[AuthorController::class,'logout'])->middleware('auth:api');
