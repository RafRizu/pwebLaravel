@extends('layouts.main')
@section('content')
    <div class="container">
    <div class="text-center">
        <h1 class="my-4 header-kelas">
            My Post
            <br>
            {{$posts->title}}
        </h1>
        <div class="mb-5 row d-flex flex-row justify-content-center">
            <div class="col-5 px-4 d-flex flex-row align-items-center gap-2 justify-content-end">
                <img src="{{ asset('img/global.svg') }}" alt="icon global" height="24px">
                <h6 class="fw-normal">
                    Release date {{$posts->created_at->format('F Y')}}
                </h6>
            </div>
            <div class="col-5 px-4 d-flex flex-row align-items-center gap-2">
                <img src="{{ asset('img/convert3dcube.svg') }}" alt="icon convert" height="24px">
                <h6 class="fw-normal">
                    Last updated {{$posts->updated_at->format('F Y')}}
                </h6>
            </div>
        </div>
        <iframe class="mt-3 rounded-4" style="max-width: calc(100% - 30px); width:1000px; height: max-content; min-height:500px" src="https://www.youtube.com/embed/{{$posts->id_yt}}?rel=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div id="about">
        <h3 class="fw-bolder my-4">Post</h3>
        <article class="text-justify mt-3">
            {!! $posts->about !!}
        </article>
    </div>
    <div >
        <h3 class="my-3 fw-bolder mt-5">Admin</h3>
        <a href="{{url('/mentor/@'.$posts->users->username)}}" style="display: block">
        <div class="card border-0 ps-2 pe-5" style="box-shadow: 2px 2px 4px; width: max-content;">
            <div class="card-body">
                <a href="{{url('/mentor/'.$posts->users->username)}}" >
                    <h4 class="fw-bolder text-dark">{{$posts->users->name}}</h4>
                </a>
                <p>&commat;{{ $posts->users->username }}</p>
            </div>
        </div>
        </a>
    </div>
</div>
@endsection
