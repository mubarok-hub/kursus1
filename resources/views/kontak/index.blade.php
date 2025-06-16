<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Kontak</title>
</head>

<body>
    <h2>Tambah Kontak</h2>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="/Kontak" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="umur" placeholder="Umur" required>
        <button type="submit">Tambah</button>
    </form>

    <h2>Data Kontak</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Umur</th>
        </tr>
        @foreach ($data as $kontak)
            <tr>
                <td>{{ $kontak->nama }}</td>
                <td>{{ $kontak->email }}</td>
                <td>{{ $kontak->umur }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <button>
                        <a href="/Kontak/{{ $kontak->id }}/edit" style="text-decoration: none">Edit</a>
                    </button>

                    <!-- Tombol Delete -->
                    <form action="/Kontak/{{ $kontak->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
