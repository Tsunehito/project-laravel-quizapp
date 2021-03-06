<?php

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

use App\Quiz;

Route::get('/', function () {
    $quizzes =(new Quiz)->allQuiz();
    return view('admin.index', compact('quizzes'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('quiz', 'QuizController');
Route::resource('question', 'QuestionController');
Route::resource('user', 'UserController');

Route::get('/quiz/{id}/questions', 'QuizController@question')->name('quiz.question');
