<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DbRelationshipsController;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('ckeditor',[CKEditorController::class,'index'])->name('ckeditor');
Route::post('create-ckeditor',[CKEditorController::class,'createCKEditor']);

Route::get('relations',[DbRelationshipsController::class, 'index']);
