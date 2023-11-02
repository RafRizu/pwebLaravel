@extends('layouts.main')
@section('content')
<div class="row container ms-4 mt-3" style="max-width: 100vh">
    @role('superadmin|admin')
    <div class="col-4">
        <a href="" class="btn btn-success">Tambah Post</a>
    </div>
    @endrole
    @role('superadmin')
    <div class="col-4">
        <a href="" class="btn btn-info">Kelola Post</a>
    </div>
    @endrole
    <div class="col-4">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</div>
        <div class="main-kelas mt-3">
            <div class="d-flex justify-content-center gap-3 flex-wrap img-mentor">
                @foreach ($posts as $data)
                <!-- card mode -->
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('/post/'.$data->slug)}}">{{$data->title}}</a></h5>
                        <p class="card-text">{{ $data->users->name  }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
