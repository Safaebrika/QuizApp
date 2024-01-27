<?php

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

Route::get('/', function () {

    return view('Home');
});

Auth::routes();

Route::get('/logoutt', [App\Http\Controllers\UserController::class, 'logout'])->name('logoutt');
Route::get('/login', [App\Http\Controllers\UserController::class, 'Viewlogin'])->name('loginn');
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('loginnn');
Route::get('/home', [App\Http\Controllers\CategorieController::class, 'Homecategoris'])->name('home')->middleware('adminMiddleware');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dash');

// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//_______________________________________CategoriesRoute____________________________________________________


Route::prefix('/Categories')->group(function () {

    Route::get('/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('CreateCategory');
    Route::get('/', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories');
    Route::post('/', [App\Http\Controllers\CategorieController::class, 'store'])->name('storeCategory');
    Route::get('/{id}/edit', [App\Http\Controllers\CategorieController::class, 'edit'])->name('editCategory');
    Route::put('/{id}/update', [App\Http\Controllers\CategorieController::class, 'update'])->name('updateCategory');
    Route::delete('/{id}/delete', [App\Http\Controllers\CategorieController::class, 'destroy'])->name('deleteCategory');

});


Route::prefix('/questions')->group(function () {

    Route::get('/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('Createquestion');
    Route::get('/', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
    Route::post('/', [App\Http\Controllers\QuestionController::class, 'store'])->name('storequestion');
    Route::get('/{id}/edit', [App\Http\Controllers\QuestionController::class, 'edit'])->name('editquestion');
    Route::put('/{id}/update', [App\Http\Controllers\QuestionController::class, 'update'])->name('updatequestion');
    Route::delete('/{id}/delete', [App\Http\Controllers\QuestionController::class, 'destroy'])->name('deletequestion');
});
Route::prefix('/options')->group(function () {

    Route::get('/create', [App\Http\Controllers\OptionController::class, 'create'])->name('Createoption');
    Route::get('/', [App\Http\Controllers\OptionController::class, 'index'])->name('options');
    Route::post('/', [App\Http\Controllers\OptionController::class, 'store'])->name('storeoption');
    Route::get('/{id}/edit', [App\Http\Controllers\OptionController::class, 'edit'])->name('editoption');
    Route::put('/{id}/update', [App\Http\Controllers\OptionController::class, 'update'])->name('updateoption');
    Route::delete('/{id}/delete', [App\Http\Controllers\OptionController::class, 'destroy'])->name('deleteoption');
});
// ********************quiz **************************
Route::prefix('/QuizTime')->group(function () {

    Route::get('/StartQuiz', [App\Http\Controllers\QuizController::class, 'create'])->name('startquiz');

});
