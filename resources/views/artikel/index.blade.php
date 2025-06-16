<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <h1>Daftar Artikel</h1>

    <form action="{{ route('artikel.index') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel...">
        <button type="submit">Cari</button>
    </form>

    @if (session('notifGambar'))
        <div style="color: green; font-weight: bold;">
            {{ session('notifGambar') }}
        </div>
    @endif

    @foreach ($artikels as $artikel)
        <h2>{{ $artikel->judul }}</h2>
        <p>{{ $artikel->isi }}</p>
        <p><strong>Path Gambar:</strong> {{ $artikel->gambar ?? 'tidak ada' }}</p>
        @if ($artikel->gambar)
            <img src="{{ asset('storage/' . $artikel->gambar) }}" width="200" alt="Gambar Artikel">
            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST"
                onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus gambar</button>
            </form>
        @endif
        <hr>
    @endforeach
    {{ $artikels->links() }}
</body>

</html>
