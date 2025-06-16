<h2>Artikel di Kategori: {{ $kategori->nama }}</h2>

@foreach ($kategori->artikels as $artikel)
    <h4>{{ $artikel->judul }}</h4>
    <p>{{ $artikel->isi }}</p>
@endforeach
