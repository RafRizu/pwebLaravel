@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Data Barang</h2>
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
                        <form action="{{ route('update',$brg->kd_brg) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="nm_brg">Nama Barang:</label>
                                <input type="text" class="form-control" id="nm_brg" name="nm_brg"
                                    value="{{ $brg->nm_brg }}" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" class="form-control" id="harga" name="harga"
                                    value="{{ $brg->harga }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="number" class="form-control" id="stok" name="stok"
                                    value="{{ $brg->stok }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
