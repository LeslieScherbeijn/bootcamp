@extends('layout.layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')

    <h1 class="heading is-size-5">Bewerk Artikel</h1>
    <form method="POST" action="/article/{{ $articles->id }}">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{ $articles->title }}">
            </div>

        </div>


        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <textarea class="textarea" name="excerpt" id="excerpt">{{ $articles->excerpt }}</textarea>
            </div>
        </div>


        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea class="textarea" name="body" id="body">{{ $articles->body }}</textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/article/{{ $articles->id }}">
        @csrf
        @method('delete')
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Delete</button>
            </div>
        </div>
    </form>


@endsection
