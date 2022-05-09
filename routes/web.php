<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;



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

Route::get('/',[FormController::class,'index']);


Route::view('form','form');
//for backend validation
Route::post('form',[FormController::class, 'getdata']);
//to post the form data into database
Route::post('form',[FormController::class, 'formdata']);
//to view the list of form table
Route::get('list',[FormController::class,'viewList']);

Route::post('abc', [FormController::class, 'abc']);

// Route::get('import', [UserImportController::class, 'index']);

// Route::post('import', [UserImportController::class, 'store'])->name('import');

// Route::get('/ImportExportView',[ExcelController::class,'ImportExportView']);
// Route::get('/export',[ExcelController::class,'export'])->name('export');
// Route::post('/import',[ExcelController::class,'import'])->name('import');

