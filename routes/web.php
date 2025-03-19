<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;

// Define dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/students', [DashboardController::class, 'students'])->name('dashboard.students');
Route::get('/dashboard/announcements', [DashboardController::class, 'announcements'])->name('dashboard.announcements');
Route::get('/dashboard/calendar', [DashboardController::class, 'calendar'])->name('dashboard.calendar');

Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
