<form action="/Proses" method="POST">
    @csrf
    <label for="">Nama: </label>
    <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>

{{-- tampilkan error jika ada --}}
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
