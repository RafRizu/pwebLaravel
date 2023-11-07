<?php

namespace App\Http\Controllers;

use App\Models\Brg;
use Illuminate\Http\Request;
use App\Models\detail_Pembelian;

class LaporanController extends Controller
{
    //
    public function index(){
        $detail_pembelians = detail_Pembelian::all();
        $nm_brg = [];

        foreach ($detail_pembelians as $item) {
            $kd_brg = $item->kode_brg;
            $barang = Brg::where('kd_brg', $kd_brg)->first();
            $nm_brg[] = $barang->nm_brg;
        }

        return view('layouts.manage.laporan', compact('detail_pembelians', 'nm_brg'));
    }
}
