<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function tampilForm()
    {
        return view ('form');
    }
    public function prosesForm(Request $request)
    {
            // validasi
        $request->validate([
            'nama' => 'required|min:3'
        ]);
    
        $nama = $request->input('nama');
        return "Halo saya ${nama}";
    }
}
