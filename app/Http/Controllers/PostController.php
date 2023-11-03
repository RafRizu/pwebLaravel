<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Brg;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
            $posts = Post::
                         latest()
                         ->get();
            $brg = Brg::all();
        return view('layouts.post.index',compact('posts','brg'));
    }
    public function create(){
        return view('layouts.manage.create');
    }
   public function store(Request $request)
{
    // Validasi input dari form
    $request->validate([
        'nm_brg' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
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
    $barang = Brg::create([
        'nm_brg' => $request->input('nm_brg'),
        'harga' => $request->input('harga'),
        'stok' => $request->input('stok'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('index')->with('success', 'Data barang berhasil disimpan');
}
    public function edit(Brg $brg){
        return view('layouts.manage.update',compact('brg'));
    }
public function update(Request $request, Brg $brg)
{
    // Validasi input dari form
    $request->validate([
        'nm_brg' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
    ], [
        'required' => 'Kolom :attribute harus diisi.',
        'string' => 'Kolom :attribute harus berupa teks.',
        'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'numeric' => 'Kolom :attribute harus berupa angka.',
        'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    ]);
    if (!$request) {
        return redirect()->back()->withErrors($request)->withInput();
    }
    // Update data barang menggunakan Eloquent
    $result = Brg::where('kd_brg', $brg->kd_brg)
        ->update([
            'nm_brg' => $request->input('nm_brg'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'updated_at' => Carbon::now(),
        ]);

    if ($result) {
        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('index')->with('success', 'Data barang berhasil diupdate');
    } else {
        return redirect()->back()->with('error', 'Gagal mengupdate data barang');
    }
}

public function destroy(Brg $brg)
{
    // Cari data barang berdasarkan ID
    $barang = Brg::find($brg->kd_brg);

    // Periksa apakah data barang ditemukan
    if (!$barang) {
        return redirect()->route('index')->with('error', 'Data barang tidak ditemukan');
    }

    // Hapus data barang
    $barang->delete();

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('index')->with('success', 'Data barang berhasil dihapus');
}
    public function detail(Post $post){
        return view('layouts.post.post',[
             'posts' => $post,
         ]);
    }
}
