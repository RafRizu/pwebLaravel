@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Tambah Data Faktur</h2>
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
                        <form action="{{ route('storeDetailFaktur') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" class="form-control" id="total" name="total" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <select name="keterangan" class="form-control" id="keterangan">
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="number" class="form-control" id="stok" name="stok" required>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
