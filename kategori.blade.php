@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')

<section class="content">

    <h1>Kategori Buku</h1>

    <p>
        Pilih kategori buku yang ingin
        Anda ketahui.
    </p>

    <div class="cards">

        @foreach($kategoris as $kategori)

        <div class="card">

            <h3>{{ $kategori }}</h3>

            <p>
                Koleksi buku kategori
                {{ $kategori }}.
            </p>

        </div>

        @endforeach

    </div>

</section>

@endsection