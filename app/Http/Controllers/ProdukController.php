<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::with('kategori')->get();
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kategori_id' => 'required',
            'stok' => 'required|integer',
            'modal' => 'required|numeric', // Validasi modal harus ada
            'harga' => 'required|numeric', // Validasi harga harus ada
        ]);

        $produk = Produk::whereRaw('LOWER(name) = ?', [strtolower($request->name)])->first();
        
        if ($produk) {
            $produk->stok += $request->stok;
            $produk->save();
        } else {
            Produk::create([
                'name' => $request->name,
                'kategori_id' => $request->kategori_id,
                'stok' => $request->stok,
                'tanggal_masuk' => now(),
                'modal' => $request->modal,
                'harga' => $request->harga
            ]);
        }

        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Produk::where('id', $id)->update([
            'name' => $request->name,
            'product_id' => $request->product_id,
            'stok' => $request->stok,
            'tanggal_masuk' => $request->tanggal_masuk
        ]);

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('id', $id)->delete();
        return redirect('/produk');
    }
}
