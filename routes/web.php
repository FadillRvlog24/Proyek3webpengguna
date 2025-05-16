<?php

use App\Models\PesananDB3;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\ChatController;

Route::get('/chat', function () {
    return view('chat');
});

Route::post('/chat/send', [ChatController::class, 'handleMessage']);


// Route::get('/test-flask', function () {
//     $response = Http::get('http://127.0.0.1:5000/analisa', [
//         'q' => 'Sneakers saya kotor dan menguning'
//     ]);
//     return $response->json();
// });


Route::get('/form.upload', [SepatuController::class, 'form']);
Route::get('/hasil-pencarian', [SepatuController::class, 'hasil']);

// Route::get('/upload', [SepatuController::class, 'formUpload'])->name('form.upload');
// Route::post('/upload', [SepatuController::class, 'rekomendasiLayanan'])->name('proses.upload');




// Route::get('/upload', function () {
//     return view('form_upload');
// })->name('form-upload');

// Route::post('/upload-sepatu', [SepatuController::class, 'prosesUpload'])->name('upload-sepatu');

// Route::get('/upload-sepatu', function () {
//     return view('form_upload'); // Halaman upload gambar
// })->name('form-upload');

// Route::post('/upload-sepatu', [SepatuController::class, 'prosesUpload'])->name('upload-sepatu');
// Route::get('/result', function () {
//     return view('result'); // Halaman hasil rekomendasi
// })->name('result');


Route::get('/admin/pesanan/cetak-pdf', [PesananController::class, 'cetakPDF'])->name('pesanan.cetakPDF');


Route::post('/kirim-pesan', [KontakController::class, 'store'])->name('kirim.pesan');


use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

Route::middleware([EnsureFrontendRequestsAreStateful::class])->group(function () {
    // Routes yang memerlukan authentication
});

Route::get('/admin/db3-pesanan', function () {
    $pesanan = PesananDB3::all();
    return response()->json($pesanan);
});


Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);


Route::get('/admin/register', [AdminRegisterController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);


Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/beranda', [AdminController::class, 'beranda'])->name('admin.beranda');
Route::get('/beranda', [AdminController::class, 'beranda'])->name('admin.beranda');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->name('admin.pengguna');
Route::get('/admin/pesanan', [AdminController::class, 'pesanan'])->name('admin.pesanan');

Route::get('/admin/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
Route::put('/admin/pesanan/{id}/status', [PesananController::class, 'updateStatus'])->name('pesanan.updateStatus');
Route::get('/admin/pesanan/{id}', [PesananController::class, 'show'])->name('admin.pesanan.show');

// Route::get('/admin/pesanan/detail/{id}', [PesananController::class, 'show'])->name('admin.detail-pesanan');
Route::get('/admin/pesanan/{id}', [PesananController::class, 'detail'])->name('admin.detail-pesanan');

Route::get('/admin/db3', [AdminController::class, 'dataDB3'])->name('admin.db3');
// Route::get('/admin/pengguna/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
// Route::put('/admin/pengguna/{id}', [AdminController::class, 'update'])->name('users.update');

// Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
// Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
// Route::put('/admin/users/{id}', [AdminController::class, 'update'])->name('users.update');
// Route::get('/admin/users/create', [AdminController::class, 'create'])->name('users.create');
// Route::get('/admin/users/create', [AdminController::class, 'create'])->name('users.store');

// Tampilkan daftar pengguna
Route::get('/admin/users', [AdminController::class, 'pengguna'])->name('admin.pengguna');


// Form tambah pengguna
Route::get('/admin/users/create', [AdminController::class, 'create'])->name('users.create');

// Simpan data pengguna baru
Route::post('/admin/users', [AdminController::class, 'store'])->name('users.store');

// Edit pengguna
Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{id}', [AdminController::class, 'update'])->name('users.update');


// Update pengguna
Route::put('/admin/users/{id}', [AdminController::class, 'update'])->name('users.update');

// Hapus pengguna
Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');


Route::get('/admin/statistik', [AdminController::class, 'statistik'])->name('statistik.detail');

Route::get('/admin/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/admin/layanan/create', [LayananController::class, 'create'])->name('layanan.create');
Route::post('/admin/layanan/store', [LayananController::class, 'store'])->name('layanan.store');
Route::get('/admin/layanan/{id}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
Route::delete('/admin/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');
Route::put('/admin/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');


Route::post('/admin/logout', function () {
    Auth::logout();
    return redirect('/admin/login'); // Redirect ke halaman login
})->name('admin.logout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/services', function () {
    return view('layouts.services');
});

Route::get('/services1', function () {
    return view('layouts.services1');
});

Route::get('/services2', function () {
    return view('layouts.services2');
});

Route::get('/services3', function () {
    return view('layouts.services3');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});