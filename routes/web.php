<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\MajorController;


Auth::routes();
//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
//status-update
Route::post('/status-update', [StatusController::class, 'update'])->name('status.update');
//Delete Record
Route::delete('/delete-record', [DeleteController::class, 'destroy'])->name('record.delete');
//users, roles and permissions
Route::resource('users',UserController::class);
Route::get('students', [UserController::class, 'students'])->name('all.students');
Route::get('instructors', [UserController::class, 'instructors'])->name('all.instructors');
Route::post('users/{user}/update-status', [UserController::class, 'updateStatus'])->name('users.updateStatus');
Route::resource('roles',RolesController::class);
Route::get('/assign-role', [UserRoleController::class, 'create'])->name('users.assign-role-form');
Route::post('/assign-role', [UserRoleController::class, 'store'])->name('users.assign-role');
Route::get('/permissions', [UserRoleController::class, 'index'])->name('permissions.index');
Route::post('/permissions/create', [UserRoleController::class, 'createPermission'])->name('permissions.create');
Route::post('/permissions/bulk', [UserRoleController::class, 'bulkPermission'])->name('permissions.bulk');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

//Batches
Route::resource('batches', BatchController::class);
//Majors
Route::resource('majors', MajorController::class);
//Sessions
Route::resource('sessions', SessionController::class);


//Categories, Subcategories and Courses
Route::resource('categories',CategoryController::class);
Route::resource('subcategories',SubcategoryController::class);
Route::resource('courses',CourseController::class);


Route::get('{any}', [HomeController::class, 'index'])->name('index');
