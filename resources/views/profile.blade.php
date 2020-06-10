@extends('layout.layout')

@section('content')


    <div class="container-fluid text-center">
        <div class="card w-auto text-center m-5 rounded" style="height: 100vh;">
            <div class="card-header bg-dark">
                <h1 class="display-3 headerText">This is me</h1>
            </div>
            <div class="card-body">
                <img class="float-left" src="./assets/images/profile/profilepic.jpeg" width="500" height="700"
                     alt="This is me">

                <ul class="list-group float-right w-50 list-group-flush p-2">
                    @foreach($articles as $article)
                        <div class="list-group-item list-group-item-action display-4">
                            <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
                        </div>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>




@endsection








