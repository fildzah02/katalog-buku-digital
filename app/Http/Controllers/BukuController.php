<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Data buku menggunakan array PHP
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Pemrograman Laravel',
                'penulis' => 'Andi Setiawan',
                'kategori' => 'Teknologi',
                'tahun' => 2025,
                'harga' => 85000,
                'deskripsi' => 'Buku ini membahas dasar-dasar
                pemrograman Laravel untuk pemula.'
            ],
            [
                'id' => 2,
                'judul' => 'Belajar PHP Dasar',
                'penulis' => 'Budi Santoso',
                'kategori' => 'Teknologi',
                'tahun' => 2024,
                'harga' => 75000,
                'deskripsi' => 'Buku panduan belajar PHP
                dari dasar hingga memahami pemrograman web.'
            ],
            [
                'id' => 3,
                'judul' => 'Algoritma dan Struktur Data',
                'penulis' => 'Dewi Anggraini',
                'kategori' => 'Pendidikan',
                'tahun' => 2023,
                'harga' => 90000,
                'deskripsi' => 'Buku untuk mempelajari algoritma
                dan struktur data dalam pemrograman.'
            ],
            [
                'id' => 4,
                'judul' => 'Dasar-Dasar HTML dan CSS',
                'penulis' => 'Rizky Pratama',
                'kategori' => 'Teknologi',
                'tahun' => 2025,
                'harga' => 65000,
                'deskripsi' => 'Panduan membuat website
                menggunakan HTML dan CSS.'
            ],
            [
                'id' => 5,
                'judul' => 'Novel Petualangan',
                'penulis' => 'Siti Rahmawati',
                'kategori' => 'Novel',
                'tahun' => 2022,
                'harga' => 55000,
                'deskripsi' => 'Novel yang menceritakan
                kisah petualangan penuh inspirasi.'
            ]
        ];
    }

    // Halaman daftar buku
    public function index()
    {
        $bukus = $this->dataBuku();

        return view('buku.index', compact('bukus'));
    }

    // Halaman kategori
    public function kategori()
    {
        $kategoris = [
            'Teknologi',
            'Pendidikan',
            'Novel'
        ];

        return view('buku.kategori', compact('kategoris'));
    }

    // Halaman detail buku berdasarkan ID
    public function show($id)
    {
        $bukus = $this->dataBuku();

        $buku = null;

        foreach ($bukus as $item) {
            if ($item['id'] == $id) {
                $buku = $item;
                break;
            }
        }

        abort_if(!$buku, 404);

        return view('buku.detail', compact('buku'));
    }
}