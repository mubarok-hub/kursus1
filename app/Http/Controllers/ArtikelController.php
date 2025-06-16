<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;


class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::query();

        // Fitur pencarian
        if ($search = $request->input('search')) {
            $query->where('judul', 'like', "%{$search}%")
                  ->orWhere('isi', 'like', "%{$search}%");
        }

        // Pagination (10 data per halaman)
        $artikels = $query->paginate(2)->withQueryString();

        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('artikel.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasfile('gambar')) {
            $path = $request->file('gambar')->store('uploads', 'public');
            $validate['gambar'] = $path;
        }

        Artikel::create($validate);

        return redirect()->route('artikel.create')->with('success', 'Artikel berhasil di tambah');
    }
    public function destroy($id)
    {
        $dataArtikel = Artikel::findOrfail($id);
        Storage::disk('public')->delete($dataArtikel->gambar);

        return redirect()->route('artikel.index')->with('notifGambar', 'Gambar berhasil di hapus hiphip horeee hiphip horeee hiphip horeee hiphip horeee');
    }
}
