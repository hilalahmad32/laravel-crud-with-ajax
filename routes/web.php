<?php

use App\Http\Controllers\student\AddStudentController;
use App\Http\Controllers\student\DeleteController;
use App\Http\Controllers\student\EditStudentController;
use App\Http\Controllers\student\ShowStudentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ShowStudentController::class,'index'])->name('student.home');
Route::post('/add-student',[AddStudentController::class,'create']);
Route::get('/get',[ShowStudentController::class,'get']);
Route::get('/edit-student',[EditStudentController::class,'edit']);
Route::post('/update-student',[EditStudentController::class,'update']);
Route::get('/delete',[DeleteController::class,'delete']);
Route::get('/total',[ShowStudentController::class,'total']);



