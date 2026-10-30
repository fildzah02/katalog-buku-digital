@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<section class="content">

    <h1>Daftar Koleksi Buku</h1>

    <p>
        Berikut adalah koleksi buku yang
        tersedia di Buku Pintar.
    </p>

    <div class="cards">

        @foreach($bukus as $buku)

        <div class="card">

            <h3>{{ $buku['judul'] }}</h3>

            <p>
                Penulis:
                {{ $buku['penulis'] }}
            </p>

            <p>
                Kategori:
                {{ $buku['kategori'] }}
            </p>

            <p>
                Harga:
                Rp{{ number_format($buku['harga'], 0, ',', '.') }}
            </p>

            <a href="{{ route('buku.detail', $buku['id']) }}"
               class="btn">
                Lihat Detail
            </a>

        </div>

        @endforeach

    </div>

</section>

@endsection