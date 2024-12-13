<?php
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home'); //return redirect()->route('resumes.index'); // Redirige a la lista de currículums
});
// return view('home'); // Carga la vista 'home'

// Ruta para la página de índice (se asocia al controlador IndexController)
Route::get('/home', [ResumeController::class, 'home']); // Ruta principal
Route::resource('resumes', ResumeController::class); // CRUD

Route::get('/resumes/{id}/preview', [ResumeController::class, 'previewPDF'])->name('resumes.preview');

// Otras rutas de autenticación
Route::get('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


// Otras rutas de autenticación

Route::get('/resumes/create', [ResumeController::class, 'create'])->name('resumes.create');
Route::post('/resumes', [ResumeController::class, 'store'])->name('resumes.store');
Route::get('/resumes/{id}', [ResumeController::class, 'show'])->name('resumes.show');
// Ruta para exportar a PDF
Route::get('resumes/{id}/export', [ResumeController::class, 'exportToPdf'])->name('resumes.export');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('resumes', ResumeController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
