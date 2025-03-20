<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunDokterController;
use App\Http\Controllers\AkunLaboratController;
use App\Http\Controllers\AkunPasienController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PenarikanDanaController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MidtransController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route::get('/profile', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/add-profile', [LoginController::class, 'login']);
// Route::post('/update-profile', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/akundokter', [AkunDokterController::class, 'index'])->name('akundokter');
    Route::post('/akundokter', [AkunDokterController::class, 'store'])->name('akundokter');
    Route::post('/akundokter/edit', [AkunDokterController::class, 'update'])->name('akundokter.edit');
    Route::delete('/akundokter/hapus/{dokter}', [AkunDokterController::class, 'destroy'])->name('akundokter.hapus');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/akunlaborat', [AkunLaboratController::class, 'index'])->name('akunlaborat');
    Route::post('/akunlaborat', [AkunLaboratController::class, 'store'])->name('akunlaborat');
    Route::post('/akunlaborat/edit', [AkunLaboratController::class, 'update'])->name('akunlaborat.edit');
    Route::delete('/akunlaborat/hapus/{laborat}', [AkunLaboratController::class, 'destroy'])->name('akunlaborat.hapus');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/akunpasien', [AkunPasienController::class, 'index'])->name('akunpasien');
    Route::post('/akunpasien', [AkunPasienController::class, 'store'])->name('akunpasien');
    Route::post('/akunpasien/edit', [AkunPasienController::class, 'update'])->name('akunpasien.edit');
    Route::delete('/akunpasien/hapus/{pasien}', [AkunPasienController::class, 'destroy'])->name('akunpasien.hapus');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/penarikandana', [PenarikanDanaController::class, 'index'])->name('penarikandana');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/rekammedis', [RekamMedisController::class, 'index'])->name('rekammedis');
    Route::post('/rekammedis', [RekamMedisController::class, 'store'])->name('rekammedis.store');
    Route::delete('/rekammedis/hapus/{rekam}', [RekamMedisController::class, 'destroy'])->name('rekammedis.hapus');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profildokter{id}', [ProfilController::class, 'dokter'])->name('profildokter');
});

Route::post('/bayarkonsultasi', [MidtransController::class, 'bayarKonsultasi'])->name('transaksi.konsultasi');

Route::get('/get-status-chat', function () {
    $user = Auth::user();
    if (!$user) {
        return response()->json(['message' => 'User tidak ditemukan!'], 401);
    }
    return response()->json(['status_chat' => $user->status_chat]);
});

Route::post('/update-status-chat', function (Request $request) {
    $userId = Auth::id();
    if (!$userId) {
        return response()->json(['message' => 'User tidak ditemukan!'], 401);
    }
    User::where('id', $userId)->update(['status_chat' => $request->status_chat]);
    return response()->json(['message' => 'Status chat diperbarui!']);
});

Route::get('/payment/success', function (Request $request) {
    $orderId = $request->query('order_id');

    return view('payment.success', compact('orderId'));
})->name('payment.success');

Route::get('/payment/webhook', [MidtransController::class, 'notification'])->name('payment.webhook');

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::get('/editprofil', [ProfilController::class, 'edit'])->name('editprofil');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/chat/{konsultasi_id}', [ChatController::class, 'index'])->name('konsultasi.chat');
    Route::post('/chat', [ChatController::class, 'store']);
});

Route::middleware('auth:sanctum')->group(function (): void {
    Route::post('/chatget', [ChatController::class, 'getMessages']);
    // Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
});

// Route::get('/get-messages', [ChatController::class, 'getMessages']);
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('chat.send');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');