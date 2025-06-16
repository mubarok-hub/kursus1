<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Halaman Dashboard!Halaman Dashboard!Halaman Dashboard!Halaman Dashboard!Halaman Dashboard!Halaman
        Dashboard!Halaman Dashboard!Halaman Dashboard!Halaman Dashboard!</h1>

    <p>Halo, {{ Auth::user()->name }}. Anda sudah login.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
