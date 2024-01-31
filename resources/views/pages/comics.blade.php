@extends('layouts.layout')

@section('main-content')
<div class="wrapper">
    <section class="comics-section container pt-5 d-flex flex-column align-items-center">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2 d-flex align-items-stretch pb-4">
                <div class="card border-0" style="width: 100%;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <p class="card-text text-uppercase text-white pt-2"> {{$comic['title']}} </p>
                </div>
            </div>
            @endforeach
        </div>
        <button>Load more</button>
    </section>
</div>
@endsection