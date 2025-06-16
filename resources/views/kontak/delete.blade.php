<form action="/Kontak/{{ $data->id }}" style="display: inline " method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Yakin?')">Hapus</button>
</form>
