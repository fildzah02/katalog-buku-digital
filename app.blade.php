<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Buku Pintar</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div class="container navbar">

            <h2>Buku Pintar</h2>

            <nav>
                <a href="{{ route('home') }}">Beranda</a>

                <a href="{{ route('tentang') }}">Tentang</a>

                <a href="{{ route('buku.index') }}">Daftar Buku</a>

                <a href="{{ route('buku.kategori') }}">Kategori</a>
            </nav>

        </div>
    </header>

    <main class="container">

        @yield('content')

    </main>

    <footer>
        <p>&copy; 2026 Buku Pintar.
           Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>