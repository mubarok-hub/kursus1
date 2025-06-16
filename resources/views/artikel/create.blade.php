<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Artikel</title>
</head>

<body>
    <h1>Input Artikel</h1>

    @if (session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="judul">Judul</label><br>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"><br><br>

        <label for="isi">Isi</label><br>
        <textarea name="isi" id="isi">{{ old('isi') }}</textarea><br><br>

        <label for="kategori_id">Kategori</label>
        <select name="kategori_id" required id="kategori_id">
            <option value="">--Pilih Kategori--</option>
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama }}
                </option>
            @endforeach
        </select><br><br>
        <label for="gambar">Gambar</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>
