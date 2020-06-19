@extends('layout.layout')

@section('content')


    <div class="container-fluid d-flex justify-content-center text-center">

        <div class="card h-auto p-0 m-0 rounded">

            <div class="card-header bg-dark">
                <h1 class="display-3 headerText">This is me</h1>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-fluid float-left" src="./assets/images/profile/profilepic.jpeg" width="500"
                             height="700"
                             alt="This is me">

                    </div>

                    <div class="col-sm-8">
                        <ul class="list-group float-right w-50 list-group-flush p-2">
                            @foreach($articles as $article)
                                <div class="list-group-item list-group-item-action display-4">
                                    <a class="text-decoration-none hrefStyle"
                                       href="/article/{{ $article->id }}">{{ $article->title }}</a>
                                </div>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection








