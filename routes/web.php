<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Post\PostController;

// use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::name('admin.')->group(function () {


    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::POST('/status/{post}', [HomeController::class, 'status'])->name('home.status');


    Route::prefix('category')->group(
        function () {
            Route::GET('/', [CategoryController::class, 'index'])->name('category.index');

            // Create --
            Route::GET('/Create', [CategoryController::class, 'create'])->name('category.create');
            Route::POST('/store', [CategoryController::class, 'store'])->name('category.store');
            // ------
    
            Route::GET('/Edite/{category}/', [CategoryController::class, 'edit'])->name('category.edit');
            Route::PUT('/Edite/{category}/', [CategoryController::class, 'update'])->name('category.update');

            Route::POST('/status/{id}', [CategoryController::class, 'status'])->name('category.status');
            Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

        }
    );

    Route::prefix('posts')->group(
        function () {
            Route::GET('/', [PostController::class, 'index'])->name('posts.index');
            Route::GET('/create', [CategoryController::class, 'create'])->name('posts.create');
            Route::POST('/status/{id}', [PostController::class, 'status'])->name('posts.status');
            Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
        }
    );



});
