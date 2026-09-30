<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Kecamatan Cicalengka
|--------------------------------------------------------------------------
| Setiap route memanggil 1 method di DashboardController.
| Nama route (name) dipakai di components/sidebar.blade.php untuk
| menandai menu mana yang sedang aktif.
*/

// Halaman 1 - Ringkasan Eksekutif
Route::get('/', [DashboardController::class, 'ringkasan'])->name('dashboard');
Route::get('/ringkasan-eksekutif', [DashboardController::class, 'ringkasan'])->name('ringkasan-eksekutif');

// Halaman 2 - Demografi & Kependudukan
Route::get('/kependudukan-akta', [DashboardController::class, 'kependudukanAakta'])->name('kependudukan-akta');

// Halaman 3 - Kepegawaian
Route::get('/kepegawaian', [DashboardController::class, 'kepegawaian'])->name('kepegawaian');

// Halaman 4 - Infrastruktur & MBG
Route::get('/infrastruktur-mbg', [DashboardController::class, 'infrastrukturMbg'])->name('infrastruktur-mbg');

// Halaman 5 - Pendidikan
Route::get('/pendidikan', [DashboardController::class, 'pendidikan'])->name('pendidikan');

// Halaman 6 - Kesehatan
Route::get('/kesehatan', [DashboardController::class, 'kesehatan'])->name('kesehatan');

// Halaman 7 - Potensi Desa
Route::get('/potensi-desa', [DashboardController::class, 'potensiDesa'])->name('potensi-desa');
