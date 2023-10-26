@extends('layouts.app')


@section('content')


<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($comics as $comic)
        <div class="col">
            <div class="card text-bg-dark">
                <img src="{{$comic['thumb']}}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$comic['title']}}
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop