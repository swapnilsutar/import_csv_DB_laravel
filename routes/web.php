<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/this_one_master_page', function () {
    return view('master');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/view_all', function () {
    return view('view_all');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/view_all', [StudentController::class,'show']);

Route::post('add_student',[StudentController::class,'insert']);

Route::get('/admin', [StudentController::class,'adminimport']);

Route::post('/import',[StudentController::class,'import'])->name('student.import');
