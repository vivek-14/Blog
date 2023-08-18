<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;



Route::get('/', [PostController::class, 'index'])->name('home');

Route::group(['prefix' => 'post/'], function () {
    /* Posts */
    Route::get('create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
    Route::get('{post:slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('edit/{post:slug}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
    Route::get('/user/{user:id}', [PostController::class, 'listPostsByUserId'])->name('user.posts.show')->middleware('auth');

    Route::post('store', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
    Route::patch('edit/{post:slug}', [PostController::class, 'update'])->name('user.post.update')->middleware('auth');
    Route::delete('delete/{post:id}', [PostController::class, 'destroy'])->name('user.post.destroy')->middleware('auth');
    /* Comments */
    Route::post('{post:slug}/comment', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');
});