<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;


Route::middleware('Auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-post', [AuthController::class, 'loginPost'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register-post', [AuthController::class, 'registerPost'])->name('register.post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('Authenticated')->group(function(){
    Route::get('/', [NoteController::class, 'showAllNotes']);

    Route::get('/users-notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');

    Route::get('/create-note', [NoteController::class, 'create'])->name('create');
    Route::post('/create-note-post', [NoteController::class, 'createPost'])->name('create.post');

    Route::get('/note/{id}', [NoteController::class, 'showNote'])->name('showNote');

    Route::get('/edit-note/{id}', [NoteController::class, 'edit'])->name('edit');
    Route::put('/edit-note-post/{id}', [NoteController::class, 'editPost'])->name('edit.post');

    Route::delete('/delete', [NoteController::class, 'delete'])->name('delete');

    Route::get('/user-edit/{id}', [UserController::class, 'editUser'])->name('editUser');
    Route::put('/user-update/{id}', [UserController::class, 'updateUser'])->name('updateUser');
});