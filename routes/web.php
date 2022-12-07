<?php
use Illuminate\Support\Facades\Route;
//memanggil file controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('Home');

Route::get('/', [HomeController::class, 'first']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/wisata', [HomeController::class, 'tbwisata']);
Route::get('/pricing', [HomeController::class, 'tbpricing']);


Route::get('/admin', function () {
    return view('backpage.admin');
})->middleware(['auth', 'verified'])->name('admin');

// Routing untuk backpage
Route::get('/input', [HomeController::class, 'input'])->name('form'); //name('form') untuk redirect /form ke /input
Route::get('/form', [AdminController::class, 'index']);
Route::post('/uploadForm', [AdminController::class,'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
