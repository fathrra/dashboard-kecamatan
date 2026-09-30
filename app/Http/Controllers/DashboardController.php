<?php

namespace App\Http\Controllers;

/**
 * DashboardController
 *
 * Mengatur 7 halaman dashboard Kecamatan Cicalengka.
 * Satu method = satu halaman. Method ini hanya mengembalikan view,
 * data Dummy (angka sementara) masih ditulis langsung di file blade,
 * nanti bisa diganti dengan data dari database.
 */
class DashboardController extends Controller
{
    /**
     * Halaman 1 - Ringkasan Eksekutif
     * URL: /  (juga alias dari /ringkasan-eksekutif)
     */
    public function ringkasan()
    {
        return view('pages.ringkasan-eksekutif');
    }

    /**
     * Halaman 2 - Demografi & Kependudukan (KTP-el, Akta Lahir, Akta Mati)
     * URL: /kependudukan-akta
     */
    public function kependudukanAakta()
    {
        return view('pages.kependudukan-akta');
    }

    /**
     * Halaman 3 - Kepegawaian PNS & PPPK
     * URL: /kepegawaian
     */
    public function kepegawaian()
    {
        return view('pages.kepegawaian');
    }

    /**
     * Halaman 4 - Infrastruktur, Pengairan & Sentra MBG
     * URL: /infrastruktur-mbg
     */
    public function infrastrukturMbg()
    {
        return view('pages.infrastruktur-mbg');
    }

    /**
     * Halaman 5 - Pendidikan
     * URL: /pendidikan
     */
    public function pendidikan()
    {
        return view('pages.pendidikan');
    }

    /**
     * Halaman 6 - Kesehatan
     * URL: /kesehatan
     */
    public function kesehatan()
    {
        return view('pages.kesehatan');
    }

    /**
     * Halaman 7 - Potensi Desa
     * URL: /potensi-desa
     */
    public function potensiDesa()
    {
        return view('pages.potensi-desa');
    }
}
