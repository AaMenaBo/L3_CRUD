<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::post('/tasks/add', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{id}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}/update', [TaskController::class, 'update'])->name('tasks.update');
Route::put('/tasks/{id}/delete', [TaskController::class, 'delete'])->name('tasks.delete');
