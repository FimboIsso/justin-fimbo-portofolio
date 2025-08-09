<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\AIController as AdminAIController;

// Portfolio routes
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact routes
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Language switching
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin protected
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn() => redirect()->route('admin.posts.index'))->name('home');
    Route::get('/posts', [AdminPostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [AdminPostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [AdminPostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [AdminPostController::class, 'destroy'])->name('posts.destroy');

    // AI assistant
    Route::post('/ai/generate', [AdminAIController::class, 'generate'])->name('ai.generate');
    Route::post('/ai/seo', [AdminAIController::class, 'seo'])->name('ai.seo');
    Route::post('/ai/enhance', [AdminAIController::class, 'enhance'])->name('ai.enhance');
});
