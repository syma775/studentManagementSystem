<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\studentcourseController;
use App\Http\Controllers\Admin\ClassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class,'index']);

//Admin contoller routes

Route::get('/admin/login/',[AdminController::class,'adminLogin']);
Route::post('/admin/create',[AdminController::class,'adminCreate']);
Route::get('/admin/dashboard',[AdminController::class,'adminDashboard']);
Route::get('/admin/logout',[AdminController::class,'adminLogout']);

//students controller route

Route::get('/students/add',[StudentsController::class,'studentsAdd']);
Route::post('/student/detail/store',[StudentsController::class,'studentDetailStore']);
Route::get('/students/list',[StudentsController::class,'studentsList']);
Route::get('/student/delete/{id}',[StudentsController::class,'studentDelete']);
Route::get('/student/edit/{id}',[StudentsController::class,'studentEdit']);
Route::post('/student/detail/update/{id}',[StudentsController::class,'studentDetailUpdate']);

//teachers controller route

Route::get('/teachers/add',[TeacherController::class,'teacherAdd']);
Route::post('/teacher/detail/store',[TeacherController::class,'teacherDetailStore']);
Route::get('/teachers/list',[TeacherController::class,'teacherList']);
Route::get('/teacher/edit/{id}',[TeacherController::class,'teacherEdit']);
Route::post('/teacher/detail/update/{id}',[TeacherController::class,'teacherDetailUpdate']);
Route::get('/teacher/delete/{id}',[TeacherController::class,'teacherDelete']);
Route::get('/teachers/login/form',[TeacherController::class,'teachersLoginForm']);
Route::post('/teacher/login',[TeacherController::class,'teacherLogin']);
Route::get('/teacher/dashboard',[TeacherController::class,'teacherDashboard']);

//department controller route

Route::get('/department/add',[DepartmentController::class,'departmentAdd']);
Route::post('/department/detail/store',[DepartmentController::class,'departmentDetailStore']);
Route::get('/department/list',[DepartmentController::class,'departmentList']);
Route::get('/department/edit/{id}',[DepartmentController::class,'departmentEdit']);
Route::post('/department/detail/update/{id}',[DepartmentController::class,'departmentDetailUpdate']);
Route::get('/department/delete/{id}',[DepartmentController::class,'departmentDelete']);

//course controller route

Route::get('/course/add',[CourseController::class,'courseAdd']);
Route::post('/course/detail/store',[CourseController::class,'courseStore']);
Route::get('/course/list',[CourseController::class,'courseList']);
Route::get('/course/edit/{id}',[CourseController::class,'courseEdit']);
Route::post('/course/detail/update/{id}',[CourseController::class,'courseUpdate']);
Route::get('/course/delete/{id}',[CourseController::class,'courseDelete']);

//student_course controller Route

Route::get('/studentcourse/add',[StudentcourseController::class,'studentCourseAdd']);
Route::post('/student/course/store',[StudentcourseController::class,'studentCourseStore']);
Route::get('/studentcourse/list',[StudentcourseController::class,'studentCourseList']);
Route::get('/student/course/edit/{id}',[StudentcourseController::class,'studentCourseEdit']);
Route::post('/student/course/update/{id}',[StudentcourseController::class,'StudentCourseUpdate']);
Route::get('/student/course/delete/{id}',[StudentcourseController::class,'studentCourseDelete']);
//class controller route

Route::get('/class/add',[ClassController::class,'classAdd']);