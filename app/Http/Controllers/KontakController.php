<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index() 
    {
        $data = Kontak::latest()->get();
        return view('kontak.index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'umur' => 'required|numeric',
        ]);

        $Kontak = Kontak::find($id);
        $Kontak->update($request->all());

        return redirect('/Kontak')->with('success', 'Data berhasil di ubah');
    }

    public function edit($id) 
    {
        $Kontak = Kontak::findorfail($id);
        return view('kontak.edit', compact('Kontak'));
    }

    public function destroy($id) 
    {
        $Kontak = Kontak::find($id);
        $Kontak->delete();
        return redirect('/Kontak')->with('success', 'Data berhasil di hapus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'umur' => 'nullable|numeric'
        ]);

        Kontak::create($request->all());

        return back()->with('success', 'Data berhasil di tambah');
    }
}
