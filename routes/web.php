<?php

use App\Http\Controllers\Admin\{GradeController, SubjectController, SubtopicController, TopicController, AdminAuthController};
use App\Http\Controllers\Admin\WorksheetsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RoutingController;
use App\Http\Controllers\User\WorksheetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Import the HomeController if not already present

// General Routes


Route::get('/', [HomeController::class, 'index']); //
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/classes', [HomeController::class, 'classes'])->name('classes');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/worksheets', [HomeController::class, 'worksheets'])->name('worksheets');
Route::get('/worksheets_grades', [WorksheetController::class, 'grades_pages'])->name('worksheets_grades');
Route::get('/worksheets_subjects', [WorksheetController::class, 'subjects_pages'])->name('worksheets_subjects');
Route::get('/worksheets_topics', [WorksheetController::class, 'topics_pages'])->name('worksheets_topics');
Route::get('/search', [WorksheetController::class, 'search'])->name('search');


//ROUTING ROUTES Through Grades
Route::get('/worksheets/grade/{grade_slug}', [RoutingController::class, 'through_grades'])->name('through_grades');
Route::get('/worksheets/grade/topic/{topic_id}', [RoutingController::class, 'through_grades_topic'])->name('through_grades_topic');
Route::get('/worksheets/grade/topic/subtopics/{subtopic_id}', [RoutingController::class, 'through_grades_topic_subtopics'])->name('through_grades_topic_subtopics');
Route::get('/worksheets/grade/topic/subtopics/worksheet/{worksheet_id}', [RoutingController::class, 'through_grades_topic_subtopic_worksheets'])->name('through_grades_topic_subtopic_worksheets');

//ROUTING THROUGH WORKSHEETS BY SUBJECTS
Route::get('/worksheets/{subject}', [RoutingController::class, 'through_worksheets_by_subjects'])->name('through_worksheets_by_subjects');
Route::get('/worksheets/topic/{topic_id}', [RoutingController::class, 'through_worksheets_by_topics'])->name('through_worksheets_by_topics');



//END OF THE GENERAL ROUTES

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Authentication Routes
Route::controller(AdminAuthController::class)->group(function () {
    Route::get('/admin/', 'showLoginForm')->name('admin.login');
    Route::post('/admin/', 'authenticate');
    Route::get('/admin/signup', 'showSignupForm')->name('admin.signup');
    Route::post('/admin/signup', 'store');
    Route::post('/admin/logout', 'logout')->name('admin.logout');
    Route::get('/admin/password/reset', 'showResetForm')->name('admin.password.reset');
    Route::put('/admin/password/reset', 'reset')->name('admin.password.reset');
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

    Route::post('/worksheets/bulk-delete', [WorksheetsController::class, 'bulkDelete'])->name('worksheets.bulkDelete');


});

require __DIR__ . '/auth.php';
