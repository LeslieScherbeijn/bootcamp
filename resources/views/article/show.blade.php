@extends('layout.layout')
@section('content')

    <div class="container-fluid text-center">
        <div class="card w-auto text-center m-5 bg-light rounded" style="height: 100vh;">
            <div class="card-header display-4 bg-dark headerText">
                {{$article->title}}
            </div>
            <div class="card-body">
                {{$article->excerpt}} <br>
                {{$article->body}} <br>

            </div>
        </div>
    </div>


@endsection










