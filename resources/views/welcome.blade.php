@extends('layout.layout')

@section('content')

    <div class="container-fluid d-flex justify-content-center text-center">

        <div class="card w-100 h-100 p-0 m-0 rounded">

            <div class="card-header bg-dark ">
                <h1 class="display-Xl-4 headerText">
                    @auth()
                        Welcome, {{ Auth::user()->name }}
                    @else
                        Welcome
                    @endauth
                </h1>
            </div>

            <div class="card-body text-center">

                <div>
                    <img class=" img-fluid  rounded mt-5" src="/assets/images/background/giphy.gif">
                    <p class="display-4 mt-5 ">Feel free to look around</p>
                </div>

                <br>

                <div class="text-center d-flex justify-content-center">
                    <div class=" col-xs-12 col-md-8">
                        <a href="https://www.instagram.com/leslie_s2001/" target="_blank">
                            <i class="fab fa-instagram icons"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/leslie-scherbeijn-020231173/" target="_blank">
                            <i class="fab fa-linkedin icons"></i>
                        </a>
                        <a href="https://www.facebook.com/leslie.scherbeijn" target="_blank">
                            <i class="fab fa-facebook-square icons"></i>
                        </a>
                        <a href="https://github.com/LeslieScherbeijn" target="_blank">
                            <i class="fab fa-github icons"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection










