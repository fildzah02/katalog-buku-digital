@extends('layouts.app')

@section('title', 'Tentang Toko')

@section('content')

<section class="content">

    <h1>Tentang Buku Pintar</h1>

    <div class="card">

        <h2>{{ $profil['nama'] }}</h2>

        <p>
            <strong>Alamat:</strong>
            {{ $profil['alamat'] }}
        </p>

        <p>
            <strong>Tahun Berdiri:</strong>
            {{ $profil['tahun'] }}
        </p>

        <p>
            <strong>Deskripsi:</strong>
            {{ $profil['deskripsi'] }}
        </p>

    </div>

</section>

@endsection