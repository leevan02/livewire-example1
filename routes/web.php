<?php

use App\Http\Livewire\ClassList;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SubjectChoiceList;
use App\Http\Livewire\Admin\Users\UsersList;
use App\Http\Livewire\Admin\Teacher\TeacherList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});
route::get('/register',function (){
    return view('auth.registerPage');
})->name('register');

route::get('/login',function (){
    return view('auth.loginPage');
})->name('login');







Route::get('/teacher', function () {
    return view('teacher.teacher')->name('teacher');
});

Route::get('/student', function () {
    return view('student.student')->name('student');
});


// route::get('admin/user',UsersList::class)->name('Users-list');


// route::get('admin/Teacher',TeacherList::class)->name('teachers-list');

// route::get('classes',ClassList::class)->name('classes-list');

// route::get('admin/subjectChoice',SubjectChoiceList::class)->name('SubjectChoice-list');
Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('admin/subject', function () {
    return view('admin.subject');
});
Route::get('admin/schedule', function () {
    return view('admin.schedule.schedule');
});

Route::get('admin/Teacher', function () {
    return view('admin.teacher.teacher');
});

Route::get('classes', function () {
    return view('admin.classes.classes');
});

Route::get('admin/user', function () {
    return view('admin.student.student');
});