@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Tambah Data Barang</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('storeStok') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="kd_brg">Nama Barang:</label>
                                {{-- <input type="text" class="form-control" id="nm_brg" name="nm_brg" required> --}}
                                <select class="form-control" name="kode_brg" id="kd_brg">
                                    @foreach ($barangss as $data)
                                        <option value="{{$data->kd_brg}}">{{$data->nm_brg}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" class="form-control" id="harga" name="harga" required>
                            </div> --}}
                            <div class="form-group">
                                <label for="no_faktur">No Faktur:</label>
                                <input type="number" class="form-control" id="no_faktur" name="no_faktur" required>
                            </div>
                            <div class="form-group">
                                <label for="total_beli">Jumlah Beli:</label>
                                <input type="number" class="form-control" id="total_beli" name="total_beli" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
