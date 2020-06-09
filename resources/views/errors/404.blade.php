@extends('layout.errorLayout')
@section('content')

    <div class="container text-center">

        <div class="card m-5 rounded" style="height: 75vh;">
            <div class="card-header bg-dark">
                <h1 class="display-3 font-weight-bold headerText">Oops... nothing's here!
                    <br>
                    Error 404
                </h1>
            </div>
            <div class="card-body">
                <div class="row d-flex">
                    <h2 class="pl-5 m-0">Maybe we should travel somewhere else?</h2>
                </div>
                <div class="row center-row text-left p-5">
                    <div class="col">
                        <a href="/">
                            <p>-home</p>
                        </a>
                        <a href="/profile">
                            <p>-profile</p>
                        </a>
                        <a href="/grade">
                            <p>-dashboard</p>
                        </a>
                        <a href="/article">
                            <p>-blog</p>
                        </a>
                    </div>
                    <div class="col pr-5 text-right ">
                        <img class="img-fluid switch" style="width:25vw; height: auto;"
                             src="/assets/images/background/404.gif">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
