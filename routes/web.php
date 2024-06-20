<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ScienceController;


Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/sciences', [ScienceController::class, 'index'])->name('sciences');
Route::get('/{name}', [ScienceController::class, 'topics_by_science'])->name('sciences.topics_by_science');
Route::get('/{science_name}/{topic_name}', [ScienceController::class, 'lessons_by_topic'])->name('sciences.lessons_by_topic');
Route::get('/{science_name}/{topic_name}/{lesson_name}', [ScienceController::class, 'show_lesson'])->name('sciences.show_lesson');
