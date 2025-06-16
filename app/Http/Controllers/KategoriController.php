<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function tampilkanKategori($id)
        {
            $kategori = Kategori::with('artikels')->findOrfail($id);
            return view('artikel.by_kategori', compact('kategori'));
        }
}
