@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="mt-3">Laporan Detail Pembelian</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Beli</th>
                    <th>Nama Barang</th>
                    <th>Qty Beli</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail_pembelians as $detail_pembelian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detail_pembelian->nomor_beli }}</td>
                        <td>{{ $nm_brg[$loop->index] }}</td>
                        <td>{{ $detail_pembelian->qty_beli }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('index')}}" class="btn btn-success my-3">Kembali</a>
    </div>
@endsection
