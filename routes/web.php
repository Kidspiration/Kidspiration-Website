<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [CourseController::class, 'welcome'])
    ->name('courses.welcome');

Route::get('/welcome', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/admin-login', [CourseController::class, 'adminLogin'])
    ->name('courses.admin-login');

Route::get('/courses-admin', [CourseController::class, 'course'])
    ->name('courses.course');

Route::get('/courses-admin/grade-a', [CourseController::class, 'courseA'])
    ->name('courses.A');

Route::get('/courses-admin/grade-b', [CourseController::class, 'courseB'])
    ->name('courses.B');

Route::get('/courses-admin/grade-c', [CourseController::class, 'courseC'])
    ->name('courses.C');

Route::get('/courses-admin/grade-d', [CourseController::class, 'courseD'])
    ->name('courses.D');

Route::get('/courses-admin/grade-e', [CourseController::class, 'courseE'])
    ->name('courses.E');

Route::get('/courses-admin/grade-f', [CourseController::class, 'courseF'])
    ->name('courses.F');

Route::get('/courses-admin/{course}', [CourseController::class, 'show'])
    ->name('courses.show');

Route::get('/courses-admin/{course}/edit', [CourseController::class, 'edit'])
    ->name('courses.edit');

Route::patch('/courses-admin/{course}', [CourseController::class, 'update'])
    ->name('courses.update');

Route::delete('/courses-admin/delete/{course}', [CourseController::class, 'destroy'])
    ->name('courses.destroy');

Route::get('/course-create', [CourseController::class, 'create'])
    ->name('courses.create');

Route::post('/course', [CourseController::class, 'store'])
    ->name('courses.store');

Route::get('/quiz-admin', [QuizController::class, 'quiz'])
    ->name('courses.quiz');

Route::get('/quiz-create', [QuizController::class, 'create'])
    ->name('quizzes.create');

Route::post('/quiz', [QuizController::class, 'store'])
    ->name('quizzes.store');

Route::post('/quiz-admin/{quiz}', [QuizController::class, 'check'])
    ->name('quizzes.check');

Route::get('/quiz-admin/{quiz}', [QuizController::class, 'show'])
    ->name('quizzes.showAdmin');

Route::get('/quiz-admin/{quiz}/edit', [QuizController::class, 'edit'])
    ->name('quizzes.edit');

Route::patch('/quiz-admin/{quiz}', [QuizController::class, 'update'])
    ->name('quizzes.update');

Route::delete('/quiz-admin/delete/{quiz}', [QuizController::class, 'destroy'])
    ->name('quizzes.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('admin.about');
});
