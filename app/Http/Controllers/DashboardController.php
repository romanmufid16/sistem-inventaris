<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBarang = Produk::count();
        $totalPenjualan = Penjualan::count();

        $totalProfit = Penjualan::sum('profit');
        return view('dashboard.index', compact('totalBarang', 'totalPenjualan','totalProfit'));
    }

}
