@extends('layouts.main') <!-- Pastikan menggunakan layout yang sesuai -->

@section('content')
<div class="container">
    <h1>Daftar Faktur</h1>
            <div class="row" style="max-width: 100vh">
            @role('superadmin|admin')
                <div class="col-4">
                    <a href="{{ route('index') }}" class="btn btn-success">Kembali</a>
                </div>
            @endrole
            @role('admin|superadmin')
                <div class="col-4">
                    <a href="{{route('createFaktur')}}" class="btn btn-success  ps-2">Buat Faktur</a>
                </div>
            @endrole
            @role('superadmin')
                <div class="col-4">
                    <a href="{{route('laporan')}}" class="btn btn-success  ps-2">Masukkan barang</a>
                    <a href="{{route('createFaktur')}}" class="btn btn-info">Tambah faktur</a>
                </div>
            @endrole
        </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor Faktur</th>
                <th>Tanggal</th>
                <th>Harga Satuan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakturs as $faktur)
            <tr>
                <td>{{ $faktur->no_faktur }}</td>
                <td>{{ $faktur->tanggal_faktur }}</td>
                <td>{{ $faktur->total }}</td>
                <td>{{ $faktur->keterangan }}</td>
                @role('superadmin')
                    <td>

                        {{-- <a href="{{ route('tambahDetail', $faktur->nomor_faktur) }}" class="btn btn-warning btn-sm mx-2 d-inline">Tambah Barang</a>
                        <a href="{{ route('showFaktur', $data->nomor_faktur) }}" class="btn btn-info btn-sm mx-2 d-inline">Detail</a> --}}


                            <a type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteConfirmation{{$faktur->no_faktur}}">Hapus</a>
                                @include('layouts.partials.modalfaktur')

                    </td>
                @endrole

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
