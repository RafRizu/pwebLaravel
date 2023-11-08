<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    //
    public function index(){
        $fakturs = Faktur::all();
        return view('layouts.superadmin.index',compact('fakturs'));
    }
    public function createFaktur(){
        return view('layouts.superadmin.addfaktur');
    }
    public function storeFaktur(Request $request){
            // Validasi input dari form
    $request->validate([
        'total' => 'required|integer',
        'kode_brg' => 'required|integer',
        // 'stok' => 'required|integer',
    ], [
        'required' => 'Kolom :attribute harus diisi.',
        'string' => 'Kolom :attribute harus berupa teks.',
        'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'numeric' => 'Kolom :attribute harus berupa angka.',
        'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    ]);

    // Jika validasi gagal, akan kembali ke halaman sebelumnya
    // dan pesan error akan tersedia di sesi flash
    if (!$request) {
        return redirect()->back()->withErrors($request)->withInput();
    }

    // Jika validasi berhasil, lanjutkan untuk menyimpan data ke dalam database
    $barang = Faktur::create([

        'tanggal_faktur' => Carbon::now()->format('Y-m-d'),
        'total' => $request->input('total'),
        'keterangan' => $request->input('keterangan'),
        // 'kembalian' => $request->input('kode_brg'),

        // 'stok' => $request->input('stok'),
        // 'stok' => 0,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('index')->with('success', 'Data barang berhasil disimpan');
    }
}
