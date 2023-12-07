<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BladeViewController;
use App\Http\Controllers\CsvUploadController;
use App\Http\Controllers\PdfConverterController;
use App\Http\Controllers\ImageZipConverter;
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

/*--BladeViewConroller Routes ----------*/
Route::get('/',[BladeViewController::class,'viewLoginPage']);
Route::get('/csv',[BladeViewController::class,'viewUploadCSV']);
Route::get('/image',[BladeViewController::class,'viewUploadimage']);
Route::get('/changepassword',[BladeViewController::class,'viewChangePassword']);


/*--AdminLoginConroller Routes ----------*/
Route::post('/login-sumbission', [AdminLoginController::class,'loginUser'])->name('login-submission');
Route::get('/logout',[AdminLoginController::class,'logout']);
Route::post('/change-Password', [AdminLoginController::class,'changePassword'])->name('change-Password');

/*--CsvUploadController Routes ----------*/
Route::post('/upload-csv', [CsvUploadController::class,'uploadCSV'])->name('upload-csv');

/*--PdfConverterController Routes ----------*/
Route::post('/generate-pdf', [PdfConverterController::class,'generatePdf'])->name('generate-pdf');

/*--ImageZipConverter Routes ----------*/
Route::post('/generate-images-zip', [ImageZipConverter::class,'zipFileConverter'])->name('generate-images-zip');

