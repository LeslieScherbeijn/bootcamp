@extends('layout.layout')

@section('content')

    <div class="container-fluid text-center">
        <div class="card w-auto text-center m-5   rounded" style="height: 100vh;">
            <div class="card-header bg-dark">
                <h1 class="display-3 headerText">
                    @auth()
                        Welcome, {{ Auth::user()->name }} :)
                    @else
                        Welcome :)
                    @endauth
                </h1>
            </div>
            <div class="card-body">
                <div>
                    <img class="text-center rounded mt-5" src="/assets/images/background/giphy.gif">
                    <p class="display-4 mt-5 text-center">Feel free to look around :) </p>
                </div>
                <div class="text-center">
                    <a href="https://www.instagram.com/leslie_s2001/" target="_blank">
                        <i class="fab fa-instagram icons" ></i>
                    </a>
                    <a href="https://www.linkedin.com/in/leslie-scherbeijn-020231173/" target="_blank">
                        <i class="fab fa-linkedin icons" ></i>
                    </a>
                    <a href="https://www.facebook.com/leslie.scherbeijn" target="_blank">
                        <i class="fab fa-facebook-square icons" ></i>
                    </a>
                    <a href="https://github.com/LeslieScherbeijn" target="_blank">
                        <i class="fab fa-github icons" ></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection










