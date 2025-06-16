<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Kontak</title>
</head>

<body>
    <h2>Edit Kontak</h2>

    <form action="/Kontak/{{ $Kontak->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $Kontak->nama }}" required>
        <input type="email" name="email" value="{{ $Kontak->email }}" required>
        <input type="number" name="umur" value="{{ $Kontak->umur }}" required>
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/Kontak">Kembali ke daftar</a>
</body>

</html>
