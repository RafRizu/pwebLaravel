@extends('layouts.main')
@section('content')
    <div class="row container ms-4 mt-3" style="max-width: 100vh">

        {{-- @role('superadmin')
    <div class="col-4">
        <a href="" class="btn btn-info">Kelola Post</a>
    </div>
    @endrole --}}
        <div class="col-4">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
    <div class="container my-2 ms-3">
        <div class="row" style="max-width: 100vh">
            @role('superadmin|admin|user')
                <div class="col-4">
                    <a href="{{ route('create') }}" class="btn btn-success">Tambah Post</a>
                </div>
            @endrole
            @role('admin|superadmin')
                <div class="col-4">
                    <a href="" class="btn btn-success  ps-2">Kelola Pengguna</a>
                </div>
            @endrole
            @role('superadmin')
                <div class="col-4">
                    <a href="" class="btn btn-success  ps-2">Laporan</a>
                </div>
            @endrole
        </div>
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered container">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Created at</th>
            <th>Updated at</th>
            @role('admin|superadmin')
                <th>Aksi</th>
            @endrole
        </tr>
        @foreach ($brg as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nm_brg }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->stok }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->created_at }}</td>
                @role('admin|superadmin')
                    <td>

                        <a href="{{ route('edit', $data->kd_brg) }}" class="btn btn-warning btn-sm mx-2 d-inline">Edit</a>

                        <form action="{{ route('destroy', $data->kd_brg) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteConfirmation">Hapus</button>
                                @include('layouts.partials.modal')
                        </form>
                    </td>
                @endrole

            </tr>
        @endforeach
    </table>
    </div>
@endsection
