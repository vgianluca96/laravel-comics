@extends('layouts.app')


@section('content')


<div class="container w-75 py-4">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
        @foreach($comics as $comic)
        <div class="col">
            <div class="card text-bg-dark border-0">
                <img src="{{$comic['thumb']}}" alt="" class="comics-thumbs card-img-top rounded-0">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">
                        {{$comic['title']}}
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop