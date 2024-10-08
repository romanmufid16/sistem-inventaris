<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Penjualan::with('produk')->get();
        return view('penjualan.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = Produk::get();
        return view('penjualan.create', compact('produks'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $jumlahDijual = $request->input('jumlah');
        $produkId = $request->input('produk_id');

        // Ambil produk pertama berdasarkan ID
        $produk = Produk::where('id', $produkId)
            ->orderBy('tanggal_masuk', 'asc')
            ->first();

        // Cek apakah produk ditemukan
        if ($produk) {
            // Periksa apakah stok cukup untuk jumlah yang dijual
            if ($produk->stok >= $jumlahDijual) {
                // Kurangi stok produk
                $produk->stok -= $jumlahDijual;
                $produk->save();

                // Hitung profit
                $getProfit = ($produk->harga - $produk->modal) * $jumlahDijual;

                // Simpan penjualan
                Penjualan::create([
                    'produk_id' => $request->produk_id,
                    'jumlah' => $request->jumlah,
                    'profit' => $getProfit,
                    'tanggal_penjualan' => $request->tanggal_penjualan,
                ]);
            } else {
                // Jika stok kurang dari jumlah yang dijual
                $jumlahDijualSisa = $jumlahDijual - $produk->stok;

                // Hitung profit
                $getProfit = ($produk->harga - $produk->modal) * $produk->stok;

                // Simpan penjualan untuk stok yang tersisa
                Penjualan::create([
                    'produk_id' => $request->produk_id,
                    'jumlah' => $produk->stok,
                    'profit' => $getProfit,
                    'tanggal_penjualan' => $request->tanggal_penjualan,
                ]);

                // Set stok produk ke 0
                $produk->stok = 0;
                $produk->save();
            }
        } else {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        return redirect('/penjualan');
    }

    // public function store(Request $request)
    // {
    //     $jumlahDijual = $request->input('jumlah');
    //     $produkId = $request->input('produk_id');

    //     $produks = Produk::where('id', $produkId)
    //         ->orderBy('tanggal_masuk', 'asc')
    //         ->first();

    //     foreach ($produks as $produk)
    //         if ($produk->stok >= $jumlahDijual) {
    //             $produk->stok -= $jumlahDijual;
    //             $produk->save();

    //             $getProfit = ($produks->harga - $produks->modal) * $jumlahDijual;
    //             Penjualan::create([
    //                 'produk_id' => $request->produk_id,
    //                 'jumlah' => $request->jumlah,
    //                 'profit' => $getProfit,
    //                 'tanggal_penjualan' => $request->tanggal_penjualan,
    //             ]);

    //             break;
    //         } else {
    //             $jumlahDijual -= $produk->stok;
    //             $getProfit = ($produks->harga - $produks->modal) * $jumlahDijual;
    //             Penjualan::create([
    //                 'produk_id' => $request->produk_id,
    //                 'jumlah' => $produk->stok,
    //                 'profit' => $getProfit,
    //                 'tanggal_penjualan' => $request->tanggal_penjualan,
    //             ]);

    //             $produk->stok = 0;
    //             $produk->save();
    //         }

    //     return redirect('/penjualan');
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
