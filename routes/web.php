<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AuthController;

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
Route::get("/",[BlogsController::class,"home"])->name("home");
Route::get("/about",[BlogsController::class,"about"])->name("about");
Route::get("/blogs",[BlogsController::class,"Blogs"])->name("blogs");
Route::get("/author",[BlogsController::class,"authorInfo"])->name("authorinfo");
Route::get("/login",[AuthController::class,"loginPage"])->name("login");
Route::get("/signup",[AuthController::class,"signUpPage"])->name("signup");
Route::post("/register",[AuthController::class,"storeSignup"])->name("register");
Route::post("/loginuser",[AuthController::class,'loginUser'])->name("loginuser");
Route::post("/logout",[AuthController::class,"logout"])->name("logout");
Route::get("/specific-blog/{id}",[BlogsController::class,"SingleBlogs"])->name("singleblog");
Route::get("/author",[AuthController::class,"author"])->name("author");
Route::post("/authorStore",[AuthController::class,"storeAuthor"])->name("authorStore");