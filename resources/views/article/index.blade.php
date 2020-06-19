@extends('layout.layout')

@section('content')

    <div class="container mt-3">


        <div class="row">
            <div class="col-sm-4">
                <div class="m-0">
                    <h1 class="display-XL-4 mb-3">My written articles</h1>
                    <p>So I have written quite some articles about my education, study and more things I'm interested
                        in.
                        On this page I will share them for you to watch.</p>
                </div>

                <hr class="d-sm-none">
            </div>

            <div class="col-sm-8 text-center">
                <div>
                    <h1 class="display-XL-4">
                        My written Articles
                    </h1>
                    <p>
                        Here you can find an overview of all my articles.
                    </p>
                </div>

                <ul class="nav nav-pills flex-column">
                    <div>
                        @foreach($article as $article)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.show', $article) }}">
                                    <h1 class="display-XL-2">{{$article->title}}
                                    </h1>
                                    <p>
                                        {{$article->excerpt}}
                                    </p>
                                </a>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        /* curator-feed-default-feed-layout */
        (function () {
            var i, e, d = document, s = "script";
            i = d.createElement("script");
            i.async = 1;
            i.src = "https://cdn.curator.io/published/c79a2b60-ae02-4cd0-b8d5-a92edef5d975.js";
            e = d.getElementsByTagName(s)[0];
            e.parentNode.insertBefore(i, e);
        })();
    </script>
@endsection










