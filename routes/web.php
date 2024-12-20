<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// testing gpush
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get("/docters", function () {
    return view('docter');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::view('/services', 'services');

// Route::get('/admin/',[AdminController::class,'index'])->name("admins");

// Route::post('/admin/login',[AdminController::class,'authenticate_admin'])->name("admin_login");

Route::middleware(['auth', 'checksuperadmin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', App\Http\Livewire\Admins\Dashboard::class)->name('admin_dashboard');
        Route::get('settings', App\Http\Livewire\Admins\Settings::class)->name('admin_settings');
        Route::get('/admin/requestedappointments', App\Http\Livewire\Admins\requestedAppointments::class)->name('requestedAppointment');
        Route::get('/subscribers', App\Http\Livewire\Admins\Subscibers::class)->name('subscibers');
        Route::get('/contactedus', App\Http\Livewire\Admins\Contactedus::class)->name('contactedus');
        Route::get('/projects', App\Http\Livewire\Admins\ProjectManager::class)->name('projects');
    });
});






Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
