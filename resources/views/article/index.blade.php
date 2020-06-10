@extends('layout.layout')
@section('content')



    <div class="container-fluid text-center">
        <div class="card w-auto text-center m-5   rounded" style="height: 100vh;">
            <div class="card-header bg-dark">
                <h1 class="display-3 headerText">Here are all my written articles
                    @can('create-article')
                        <a href="article/create"><i class="fas fa-plus float-right mt-4"
                                                    style="font-size: 5vh; color: whitesmoke"></i></a>
                    @endcan

                </h1>

            </div>
            <div class="card-body">
                <ul class="list-group w-100 list-group-flush p-2">
                    @foreach($article as $article)
                        <div class="list-group-item list-group-item-action display-4">
                            <a class="text-decoration-none" style="color: black;"
                               href="{{ route('article.show', $article) }}">{{ $article->title }}
                                <br> {{ $article->excerpt }}

                                @can('edit-article')
                                    <a href="article/{{$article->id}}/edit"><i class="fas fa-edit float-right"
                                                                               style="font-size: 2vh"></i></a>
                                @endcan
                            </a>
                        </div>

                    @endforeach
                </ul>
                </ul>
            </div>

        </div>
    </div>



@endsection
