<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\DictController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ThemeController;
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

Route::view('/','user.index')->name('user.index');
Route::view('/about','user.about')->name('user.about');


Route::prefix('admin')->group(callback: function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::view('profile','admin.profile')->name('admin.profile');
        Route::post('profile',[AdminController::class, 'update_password'])->name('admin.password.update');

        Route::get('section/{id}', [AdminController::class, 'section'])->name('admin.view.section');

        Route::get('theme-question/{id}', [QuestionController::class, 'view_questions'])->name('theme.question.view');
        Route::post('add-question', [QuestionController::class, 'add_question'])->name('admin.question.add');
        Route::get('delete-question/{id}', [QuestionController::class, 'delete_question'])->name('admin.question.delete');

        Route::get('show-theme-dicts/{theme_id}', [DictController::class, 'show_theme_dicts'])->name('admin.theme.dicts');
        Route::get('delete-theme-dict/{dict_id}', [DictController::class, 'delete_dict'])->name('admin.delete.dict');
        Route::post('add-dict', [DictController::class, 'new_dict'])->name('admin.add.dict');

        Route::get('show-theme-quizzes/{theme_id}', [QuizController::class, 'show_quizzes'])->name('admin.theme.quizzes');
        Route::get('delete-theme-quiz/{quiz_id}', [QuizController::class, 'delete_quiz'])->name('admin.delete.quiz');
        Route::post('add-quiz', [QuizController::class, 'add_quiz'])->name('admin.add.quiz');

        Route::get('theme-audio/{theme_id}', [AudioController::class, 'view_audios'])->name('theme.audio.view');
        Route::post('add-audio', [AudioController::class, 'add_audio'])->name('admin.audio.add');
        Route::get('delete-audio/{id}', [AudioController::class, 'delete_audio'])->name('admin.audio.delete');

        Route::post('add-section', [ThemeController::class, 'add_section'])->name('admin.add.section');
    });
});
