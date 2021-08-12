<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ----------------------------------------------------------------------------
// Views for all users
// ----------------------------------------------------------------------------

// Index, go straight to login.
Route::get('/', function () {
    return Redirect::route('login');
})->middleware(['auth'])->name('index');

// Home page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Engineering journal
Route::resource('journal', EntryController::class)->missing(function (Request $request) {
    return Redirect::route('journal.index');
})->only([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);;
Route::get('/journal/{id}/remove', [EntryController::class, 'remove'])->middleware(['auth'])->name('journal.remove');

// Tasks
Route::get('/tasks/all', [TaskController::class, 'all'])->middleware(['auth'])->name('all_tasks');
Route::resource('tasks', TaskController::class)->missing(function (Request $request) {
    return Redirect::route('tasks.index');
})->only([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);;
Route::post('/tasks/{id}/mark', [TaskController::class, 'mark'])->middleware(['auth'])->name('task.mark');
Route::get('/tasks/{id}/remove', [TaskController::class, 'remove'])->middleware(['auth'])->name('tasks.remove');

// Announcements
Route::resource('announcements', AnnouncementController::class)->missing(function (Request $request) {
    return Redirect::route('announcements.index');
})->only([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);;
Route::get('/announcements/{id}/remove', [AnnouncementController::class, 'remove'])->middleware(['auth'])->name('announcements.remove');

// ----------------------------------------------------------------------------
// Pages available for staff & admins
// ----------------------------------------------------------------------------

// Groups
Route::resource('groups', GroupsController::class)->missing(function (Request $request) {
    return Redirect::route('groups.index');
})->only([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);;
Route::get('/groups/{id}/remove', [GroupsController::class, 'remove'])->middleware(['auth'])->name('groups.remove');

// Students
Route::resource('students', StudentController::class)->missing(function (Request $request) {
    return Redirect::route('student.index');
})->only([
    'index', 'show', 'update'
]);
Route::post('/students/{id}/update_role', [StudentController::class, 'update_role'])->middleware(['auth'])->name('students.update_role');

// ----------------------------------------------------------------------------
// Auth routes
// ----------------------------------------------------------------------------

require __DIR__.'/auth.php';
