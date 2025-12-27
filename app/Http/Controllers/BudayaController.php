<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    // Menampilkan daftar budaya (Read)
    public function index()
    {
        $budayas = Budaya::all();
        return view('budaya.index', compact('budayas'));
    }

    // Menampilkan form tambah (Create)
    public function create()
    {
        return view('budaya.create');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_budaya' => 'required',
            'asal_daerah' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        Budaya::create($request->all());
        return redirect()->route('budaya.index');
    }

    // Menampilkan form edit (Update)
    public function edit(Budaya $budaya)
    {
        return view('budaya.edit', compact('budaya'));
    }

    // Memperbarui data
    public function update(Request $request, Budaya $budaya)
    {
        $budaya->update($request->all());
        return redirect()->route('budaya.index');
    }

    // Menghapus data (Delete)
    public function destroy(Budaya $budaya)
    {
        $budaya->delete();
        return redirect()->route('budaya.index');
    }
}