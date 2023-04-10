<?php

use App\Http\Controllers\AboutAsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiModelController;
use App\Http\Controllers\KeluargaModelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulModelController;
use Illuminate\Support\Facades\Auth;

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



//Job 06

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index']);

    Route::prefix('product')->group(function() {
        Route::get('/marbel', [ProductController::class, 'index']);
    });
    
    Route::get('/news/{name}', [NewsController::class, 'index']);

    Route::prefix('program')->group(function() {
        Route::get('/daftar', [ProgramController::class, 'index']);
    });

    Route::get('/aboutas', [AboutAsController::class, 'index']);

    Route::resource('contactus', ContactUsController::class);

    Route::get('/about', [AboutController::class, 'index']);

    Route::get('/articles/{id}', [ArticleController::class, 'index']);

    //Jobsheet 3 Prak 2

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/kuliah', [KuliahController::class, 'index']);

    //Prak 4

    Route::get('/artikel', [ArtikelModelController::class, 'index']);

    //Prak 4 Tugas

    // Route::get('/hobi', [HobiModelController::class, 'index']);

    // Route::get('/keluarga', [KeluargaModelController::class, 'index']);

    // Route::get('/matkul', [MatkulModelController::class, 'index']);

    //Pert 7

    Route::resource('/mahasiswa', MahasiswaController::class);

    //Pert 7 Tugas

    Route::resource('/hobi', HobiModelController::class);

    Route::resource('/keluarga', KeluargaModelController::class);

    Route::resource('/matkul', MatkulModelController::class);
    
});
