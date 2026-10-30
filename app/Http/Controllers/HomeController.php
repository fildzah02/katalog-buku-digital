<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Beranda
    public function index()
    {
        return view('layouts.home');
    }

    // Halaman Tentang Toko
    public function tentang()
    {
        $profil = [
            'nama' => 'Buku Pintar',
            'alamat' => 'Tasikmalaya, Jawa Barat',
            'tahun' => 2020,
            'deskripsi' => 'Buku Pintar merupakan toko buku
            yang menyediakan berbagai macam buku pendidikan,
            teknologi, novel, dan pengetahuan umum.'
        ];

        return view('layouts.tentang', compact('profil'));
    }
}