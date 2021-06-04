<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TempController;
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
Route::get('/', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/welcome', [CourseController::class, 'welcome'])
    ->name('courses.welcome');

Route::get('/login', [CourseController::class, 'login'])
    ->name('courses.login');

Route::get('/courses', [CourseController::class, 'course'])
    ->name('courses.course');

Route::get('/courses/grade-a', [CourseController::class, 'courseA'])
    ->name('courses.A');

Route::get('/courses/grade-b', [CourseController::class, 'courseB'])
    ->name('courses.B');

Route::get('/courses/grade-c', [CourseController::class, 'courseC'])
    ->name('courses.C');

Route::get('/courses/grade-d', [CourseController::class, 'courseD'])
    ->name('courses.D');

Route::get('/courses/grade-e', [CourseController::class, 'courseE'])
    ->name('courses.E');

Route::get('/courses/grade-f', [CourseController::class, 'courseF'])
    ->name('courses.F');

Route::get('/courses/{course}', [CourseController::class, 'show'])
    ->name('courses.show');

Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])
    ->name('courses.edit');

Route::patch('/courses/{course}', [CourseController::class, 'update'])
    ->name('courses.update');

Route::delete('/courses/delete/{course}', [CourseController::class, 'destroy'])
    ->name('courses.destroy');

Route::get('/course-create', [CourseController::class, 'create'])
    ->name('courses.create');

Route::post('/course', [CourseController::class, 'store'])
    ->name('courses.store');

Route::get('/quiz', [QuizController::class, 'quiz'])
    ->name('courses.quiz');

Route::get('/quiz-create', [QuizController::class, 'create'])
    ->name('quizzes.create');

Route::post('/quiz', [QuizController::class, 'store'])
    ->name('quizzes.store');

Route::post('/quiz/{quiz}', [QuizController::class, 'check'])
    ->name('quizzes.check');

Route::get('/quiz/{quiz}', [QuizController::class, 'show'])
    ->name('quizzes.show');

Route::get('/quiz/{quiz}/edit', [QuizController::class, 'edit'])
    ->name('quizzes.edit');

Route::patch('/quiz/{quiz}', [QuizController::class, 'update'])
    ->name('quizzes.update');

Route::delete('/quiz/delete/{quiz}', [QuizController::class, 'destroy'])
    ->name('quizzes.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');

Route::get('/about', function () {
    return view('admin.about');
});

Route::post('/sendemail', [App\Http\Controllers\TempController::class, 'send'])->name('support.store');

Route::get('/support', [App\Http\Controllers\TempController::class, 'index'])->name('support.index');

