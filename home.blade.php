@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">

    <h1>Selamat Datang di Buku Pintar</h1>

    <p>
        Temukan berbagai macam buku menarik,
        mulai dari teknologi, pendidikan,
        hingga novel inspiratif.
    </p>

    <a href="{{ route('buku.index') }}"
       class="btn">
        Lihat Koleksi Buku
    </a>

</section>

<section class="content">

    <h2>Mengapa Memilih Buku Pintar?</h2>

    <div class="cards">

        <div class="card">
            <h3>Koleksi Lengkap</h3>
            <p>
                Berbagai jenis buku tersedia
                untuk kebutuhan belajar.
            </p>
        </div>

        <div class="card">
            <h3>Harga Terjangkau</h3>
            <p>
                Buku berkualitas dengan harga
                yang ramah di kantong.
            </p>
        </div>

        <div class="card">
            <h3>Mudah Dipelajari</h3>
            <p>
                Temukan referensi untuk
                menambah pengetahuan.
            </p>
        </div>

    </div>

</section>

@endsection