<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/nosotros', [FrontendController::class, 'about'])->name('about');
Route::get('/servicios', [FrontendController::class, 'services'])->name('services');
Route::get('/proyectos', [FrontendController::class, 'projects'])->name('projects');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontendController::class, 'blogPost'])->name('blog.post');

// Contact Form (with Rate Limiting)
Route::get('/contacto', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contacto', [FrontendController::class, 'submitContact'])
    ->name('contact.submit')
    ->middleware('throttle:5,1');

// Complaints Book (with Rate Limiting)
Route::get('/libro-reclamaciones', [FrontendController::class, 'complaints'])->name('complaints');
Route::post('/libro-reclamaciones', [FrontendController::class, 'submitComplaint'])
    ->name('complaints.submit')
    ->middleware('throttle:3,1');
