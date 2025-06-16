<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halo</title>
</head>

<body>
    <h1>Halo, {{ $nama }}</h1>


    @if ($nama == 'Alin')
        <p>Selamat datang kembali, Alin</p>
    @else
        <p>Senang bertemu dengan mu, {{ $nama }}</p>
    @endif

</body>

</html>
