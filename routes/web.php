<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\BeritaController;




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
Route::get('/', function() {
    return view('home');
});

Route::get('home', [LoginRegisterController::class, 'home'])->name('views.home');

Route::get('/profile', [profilecontroller::class, 'profile'])->name('profile');

Route::get('/auth/profiledosen', [profilecontroller::class, 'profiledosen'])->name('auth.profiledosen');

Route::get('/beritaksi', [profilecontroller::class, 'beritaksi'])->name('beritaksi');

route::get('/user/home',[LoginRegisterController::class, 'userhome'])->name('user.home');

route::get('/admin/home',[LoginRegisterController::class, 'adminhome'])->name('admin.home');


route::post('/postRegister',[LoginRegisterController::class, 'postRegister'])->name('postRegister');

route::post('/postLogin',[LoginRegisterController::class, 'postLogin'])->name('postLogin');

route::get('/logout',[LoginRegisterController::class, 'logout'])->name('logout');


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    
    });
    route::get('/auth/login',[LoginRegisterController::class, 'login'])->name('auth.login');
    route::get('/auth/register',[LoginRegisterController::class, 'register'])->name('auth.register');

});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminhome'])->name('admin.home');});
    Route::post('/postBerita', [BeritaController::class, 'postBerita'])->name('postBerita');
    Route::get('/berita/form', [BeritaController::class, 'showBeritaForm'])->name('berita.form');
    Route::get('/admin/berita', [BeritaController::class, 'showberita'])->name('admin.berita');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userhome'])->name('user.home');
    Route::get('/user/berita', [BeritaController::class, 'berita'])->name('user.berita');
    
});


route::get('/logout',[LoginRegisterController::class, 'logout'])->name('logout');
route::post('/postLogin',[LoginRegisterController::class, 'postLogin'])->name('postLogin');
route::post('/postRegister',[LoginRegisterController::class, 'postRegister'])->name('postRegister');


