@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

<section class="content">

    <h1>Detail Informasi Buku</h1>

    <div class="card">

        <h2>{{ $buku['judul'] }}</h2>

        <p>
            <strong>ID Buku:</strong>
            {{ $buku['id'] }}
        </p>

        <p>
            <strong>Penulis:</strong>
            {{ $buku['penulis'] }}
        </p>

        <p>
            <strong>Kategori:</strong>
            {{ $buku['kategori'] }}
        </p>

        <p>
            <strong>Tahun Terbit:</strong>
            {{ $buku['tahun'] }}
        </p>

        <p>
            <strong>Harga:</strong>
            Rp{{ number_format($buku['harga'], 0, ',', '.') }}
        </p>

        <p>
            <strong>Deskripsi:</strong>
            {{ $buku['deskripsi'] }}
        </p>

        <a href="{{ route('buku.index') }}"
           class="btn">
            Kembali ke Daftar Buku
        </a>

    </div>

</section>

@endsection