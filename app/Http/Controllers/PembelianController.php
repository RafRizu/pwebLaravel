<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Brg;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //
    public function addStok(){
        $barangss = Brg::all();
        return view('layouts.manage.addstok', compact('barangss'));
    }
    public function storeStok(Request $request)
{
    // Validasi input dari form
    // $request->validate([
    //     'kode_brg' => 'required|string|max:255',
    //     'no_faktur' => 'required|numeric',
    //     'total_beli' => 'required|integer',
    //     // 'stok' => 'required|integer',
    // ], [
    //     'required' => 'Kolom :attribute harus diisi.',
    //     'string' => 'Kolom :attribute harus berupa teks.',
    //     'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
    //     'numeric' => 'Kolom :attribute harus berupa angka.',
    //     'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    // ]);

    // Jika validasi gagal, akan kembali ke halaman sebelumnya
    // dan pesan error akan tersedia di sesi flash
    // if (!$request) {
    //     return redirect()->back()->withErrors($request)->withInput();
    // }

    // Jika validasi berhasil, lanjutkan untuk menyimpan data ke dalam database
    // $pembelian = Pembelian::insert([
    //     'tgl_beli' => Carbon::now(),
    //     'no_faktur' => $request->input('no_faktur'),
    //     'total_beli' => $request->input('total_beli'),
    //     'kode_brg' => $request->input('kode_brg'),

    //     // 'stok' => $request->input('stok'),
    //     // 'stok' => 0,

    // ]);

    $pembelian = Pembelian::create([
        'tgl_beli' => Carbon::now(),
        'no_faktur' => $request->input('no_faktur'),
        'total_beli' => $request->input('total_beli'),
        'kode_brg' => $request->input('kode_brg'),
    ]);

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('index')->with('success', 'Stok barang berhasil ditambah');
}
}
