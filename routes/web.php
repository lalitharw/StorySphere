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
Route::get("/header",[BlogsController::class,"header"])->name("header");
Route::get("/",[BlogsController::class,"home"])->name("home");
// Route::get("/about",[BlogsController::class,"about"])->name("about");
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
Route::get("/publish",[BlogsController::class,"publishPage"])->name("publish");
Route::post("/storeblog",[BlogsController::class,"storePublishBlog"])->name("storeBlog");

// single author route
Route::get("/author/{id}",[BlogsController::class,"authorInfo"])->name("authorInfo");

// route for author managing their blogs
Route::get("/manage",[BlogsController::class,"manageBlog"])->name("manageBlog");

Route::get("/edit/{id}",[BlogsController::class,"editBlog"])->name("edit");
Route::post("/edit/{id}",[BlogsController::class,"updateBlog"])->name("upateBlog");
Route::post("/delete/{id}/",[BlogsController::class,"deleteBlog"]);
Route::get("/tag/{id}/",[BlogsController::class,"CategoryTag"]);
Route::get("/tags",[BlogsController::class,"allTags"]);
// test controller to upload file
Route::get("/upload",[BlogsController::class,"upload"])->name("upload");
Route::post("/upload",[BlogsController::class,"uploadFunction"]);

