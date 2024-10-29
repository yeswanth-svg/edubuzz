<?php

use App\Http\Controllers\Admin\{GradeController, SubjectController, SubtopicController, TopicController, AdminAuthController};
use App\Http\Controllers\Admin\WorksheetsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Import the HomeController if not already present

// General Routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/classes', [HomeController::class, 'classes'])->name('classes');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Authentication Routes
Route::controller(AdminAuthController::class)->group(function () {
    Route::get('/admin/login', 'showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'authenticate');
    Route::get('/admin/signup', 'showSignupForm')->name('admin.signup');
    Route::post('/admin/signup', 'store');
    Route::post('/admin/logout', 'logout')->name('admin.logout');
});

// Admin Panel Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');

    // Define resources for CRUD controllers
    Route::resource('grades', GradeController::class)->names('grades');
    Route::resource('subjects', SubjectController::class)->names('subjects');
    Route::resource('topics', TopicController::class)->names('topics');
    Route::resource('subtopics', SubtopicController::class)->names('subtopics');

    // Worksheet Routes (if worksheets are managed by SubtopicController)
    Route::get('/subtopics/{subtopicId}/worksheets', [WorksheetsController::class, 'index'])->name('worksheets.index');
    Route::get('/subtopics/{subtopicId}/worksheets/create', [WorksheetsController::class, 'create'])->name('worksheets.create');
    Route::post('/subtopics/{subtopicId}/worksheets', [WorksheetsController::class, 'store'])->name('worksheets.store');
    Route::get('/subtopics/{subtopicId}/worksheets/{id}/edit', [WorksheetsController::class, 'edit'])->name('worksheets.edit');
    Route::put('/worksheets/{id}', [WorksheetsController::class, 'update'])->name('worksheets.update');
    // In your routes/web.php
    Route::delete('/subtopics/{subtopicId}/worksheets/{id}', [WorksheetsController::class, 'destroy'])->name('worksheets.destroy');

});

require __DIR__ . '/auth.php';
