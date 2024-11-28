<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\VisitorMessageController;
use App\Http\Controllers\WebsiteSettingController;
use App\Http\Controllers\ProductCategoryController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/portfolio', [PortofolioController::class, 'index'])->name('portfolio');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{products:slug}', [ProductController::class, 'show'])->name('products.show');
Route::post('/visitor-messages', [VisitorMessageController::class, 'store'])->name('visitor-messages.store');

// Admin Routes (Requires Authentication)
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');


    // News Management
    Route::get('admin/news', [NewsController::class, 'list'])->name('admin.news.list');
    Route::resource('admin/news', NewsController::class)->except(['index', 'show']);

    // Categories and Tags
    Route::resource('admin/categories/news', CategoryController::class)->names('categories.news');
    Route::resource('admin/tags/news', TagController::class)->names('tags.news');
    Route::resource('admin/categories/products', ProductCategoryController::class)->names('categories.products');

    // Products Management
    Route::get('admin/products/list', [ProductController::class, 'list'])->name('admin.products.list');
    Route::resource('admin/products', ProductController::class)->except(['index', 'show']);

    // Media Library
    Route::resource('admin/media', MediaController::class)->only(['index', 'create', 'store', 'destroy']);

    // Reports
    Route::get('admin/reports/articles', [ReportController::class, 'article'])->name('reports.articles');
    Route::get('admin/reports/products', [ReportController::class, 'product'])->name('reports.products');

    // User Management
    Route::resource('admin/users', UserController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::get('admin/users/logs', [AdminLogController::class, 'index'])->name('admin.logs');

    // Profile
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Website Settings
    Route::get('admin/settings', [WebsiteSettingController::class, 'index'])->name('settings.index');
    Route::patch('admin/settings', [WebsiteSettingController::class, 'update'])->name('settings.update');

    // Pesan Pengunjung
    Route::get('admin/visitor-messages', [VisitorMessageController::class, 'index'])->name('visitor-messages.index');
    Route::delete('admin/visitor-messages/{message}', [VisitorMessageController::class, 'destroy'])->name('visitor-messages.destroy');
});

require __DIR__ . '/auth.php';
