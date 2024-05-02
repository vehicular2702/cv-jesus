<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//PRINCIPAL
Route::get('/', [ClientController::class, 'index'])->name('index');

//CV
Route::get('/cv', [ClientController::class, 'cv'])->name('cv');

//BLOG
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/blog/details/{id_blog}', [ClientController::class, 'show'])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//CONFIG
Route::get('/config', [DashboardController::class, 'config'])->name('config');

//SOBRE MI
Route::get('/config/editar/{id_sobre_mi}', [DashboardController::class, 'edit_sobre_mi'])->name('edit_sobre_mi');
Route::post('/config/registrar', [DashboardController::class, 'store_sobre_mi'])->name('store_sobre_mi');
Route::put('/actualizar/{sobre_mi}', [DashboardController::class, 'update_sobre_mi'])->name('update_sobre_mi');

//BLOG
Route::post('/config/blog', [DashboardController::class, 'store_blog'])->name('store_blog');

//CERTIFICADOS
Route::post('/config/registrar/certificados', [DashboardController::class, 'store_certificado'])->name('store_certificado');
Route::get('/download/{id_certificado}', [DashboardController::class, 'descargar_certificado'])->name('descargar_certificado');
Route::get('/ver-certificado/{id_certificado}', [DashboardController::class, 'ver_certificado'])->name('ver_certificado');



require __DIR__.'/auth.php';
