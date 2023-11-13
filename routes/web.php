<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PendidikanController;

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


// Route::get('/', function () {
//     return view('front.app');
// });
Route::controller(FrontController::class)->group(function () 
{
    Route::get('/', 'home')->name('home');
    Route::get('/berita', 'berita')->name('berita');
});
Route::controller(AuthController::class)->group(function () 
{
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'createRegister')->name('createRegister');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});
// Route::get('/home', function () {
//     return redirect('auth/');
// });

Route::group(['middleware' => ['auth'] ],function() {
    route::prefix('auth')->group(function(){
        
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index')->name('dashboard.index');
        });
        Route::resources([
            'visi_misi' => VisiMisiController::class,
            'sosial_media' => SosialMediaController::class,
            // 'dashboard' => DashboardController::class,
        ]);
        
        route::prefix('berita')->name("berita.")->group(function(){
            Route::resources([
                'kategori' => KategoriController::class,
                'berita' => BeritaController::class,
            ]);
        });

        route::prefix('guru')->name("guru.")->group(function(){
            Route::resources([
                'guru' => GuruController::class,
                'pendidikan' => PendidikanController::class,
                'jabatan' => JabatanController::class,
            ]);
        });

        route::prefix('siswa')->name("siswa.")->group(function(){
            Route::resources([
                // 'kategori' => KategoriController::class,
                'siswa' => BeritaController::class,
            ]);
            // Route::resource('kategori', KategoriController::class);


        });
        Route::Post('/visi_misi/getMisi', [VisiMisiController::class, 'getMisi'])->name('visi_misi.getMisi');
    });

        // Route::prefix('admin')->group(function() {
    // });
});
