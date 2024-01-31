@extends('layouts.layout')

@section('main-content')
<div class="wrapper">
    <section class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </section>
    <section class="comics-section container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection