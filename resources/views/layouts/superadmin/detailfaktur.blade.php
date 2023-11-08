@extends('layouts.main') <!-- Pastikan menggunakan layout yang sesuai -->

@section('content')
<div class="container">
    <h1>Faktur {{$fakturd->nomor_faktur}}</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor Faktur</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($fakturdet as $fakturd)

            <tr>
                <td>{{ $fakturd->kode_brg }}</td>
                <td>{{ $fakturd->nm_brg }}</td>
                <td>{{ $fakturd->jumlah }}</td>
                <td>{{ $fakturd->harga_satuan }}</td>
                <td>{{ $fakturd->subtotal }}</td>
                {{-- @role('superadmin')
                    <td>

                        <a href="{{ route('tambahDetail', $faktur->nomor_faktur) }}" class="btn btn-warning btn-sm mx-2 d-inline">Tambah Barang</a>
                        <a href="{{ route('showFaktur', $data->nomor_faktur) }}" class="btn btn-info btn-sm mx-2 d-inline">Detail</a>


                            <a type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteConfirmation{{$faktur->nomor_faktur}}">Hapus</a>
                                @include('layouts.partials.modalfaktur')

                    </td>
                @endrole --}}

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
