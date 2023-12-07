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
Route::group(['controller' => BladeViewController::class], function () {
    Route::get('/', 'viewLoginPage');
    Route::get('/csv', 'viewUploadCSV');
    Route::get('/image', 'viewUploadimage');
    Route::get('/changepassword', 'viewChangePassword');
});


/*--AdminLoginConroller Routes ----------*/
Route::group(['controller' => AdminLoginController::class], function () {
    Route::post('/login-sumbission', 'loginUser')->name('login-submission');
    Route::get('/logout', 'logout');
    Route::post('/change-Password', 'changePassword')->name('change-Password');
});

/*--CsvUploadController Routes ----------*/
Route::post('/upload-csv', [CsvUploadController::class,'uploadCSV'])->name('upload-csv');

/*--PdfConverterController Routes ----------*/
Route::post('/generate-pdf', [PdfConverterController::class,'generatePdf'])->name('generate-pdf');

/*--ImageZipConverter Routes ----------*/
Route::post('/generate-images-zip', [ImageZipConverter::class,'zipFileConverter'])->name('generate-images-zip');

