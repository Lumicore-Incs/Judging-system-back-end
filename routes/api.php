<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\DistrictControllers;
use App\Http\Controllers\TeacherControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//admin api
Route::post('/login', [AdminControllers::class, 'login'])->name('login');
Route::post('/register', [AdminControllers::class, 'register'])->name('register');
Route::get('/logout', [AdminControllers::class, 'logout'])->name('logout');
Route::get('getAllUser', [AdminControllers::class, 'getAllUser']);
Route::get('/userDetails', [AdminControllers::class, 'userDetails'])->name('userDetails');
Route::put('/userUpdate/{id}', [AdminControllers::class, 'userUpdate'])->name('userUpdate');


//teacher api
Route::post('/save_teacher',[TeacherControllers::class, 'saveTeacher'])->name('saveTeacher');
Route::get('/search_teacher/{input}',[TeacherControllers::class, 'searchTeacher'])->name('searchTeacher');
Route::get('/get_all_teacher',[TeacherControllers::class, 'getAllTeacher']);
Route::put('/update_teacher/{id}',[TeacherControllers::class, 'updateTeacher'])->name('updateTeacher');
Route::delete('/delete_teacher/{id}',[TeacherControllers::class, 'deleteTeacher'])->name('deleteTeacher');


//teacher api
Route::post('/save_district',[DistrictControllers::class, 'saveDistrict'])->name('saveDistrict');
Route::get('/search_district/{input}',[DistrictControllers::class, 'searchDistrict'])->name('searchDistrict');
Route::get('/get_all_district',[DistrictControllers::class, 'getAllDistrict']);
Route::put('/update_district/{id}',[DistrictControllers::class, 'updateDistrict'])->name('updateDistrict');
Route::delete('/delete_district/{id}',[DistrictControllers::class, 'deleteDistrict'])->name('deleteDistrict');