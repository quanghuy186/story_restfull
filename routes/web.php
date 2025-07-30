<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\MangaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/the-loai', [HomeController::class, 'category'])->name('categories');
Route::get('/the-loai/{slug}', [HomeController::class, 'list_category'])->name('list_category');
Route::get('/danh-sach/{slug}', [HomeController::class, 'list_story'])->name('list_story');
Route::get('/truyen-tranh/{slug}', [HomeController::class, 'story'])->name('story');
Route::get('/truyen-tranh/{story_slug}/{chapter_id}', [HomeController::class, 'read_chapter'])->name('read.chapter');