@extends('layout.layout')


@section('content')

    <div class="container-fluid text-center">
        <div class="card  text-center m-5">
            <h1 class=" card-header display-4 bg-dark text-center headerText">New Article</h1>
            <form class="form-group" method="POST" action="/article">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input
                            class="form-control text-center " @error('title')  @enderror
                        type="text"
                            name="title"
                            id="title"
                            placeholder="Title goes here"
                            value="{{old('title')}}">
                        @if($errors->has('title'))
                            <p class="errorHandle">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <small class="text-muted text-center">Title is required.</small> <br>
                    <small class="text-muted text-center">Title must be at least 5 characters.</small>
                </div>

                <div class="field w-100">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <input
                            class="form-control text-center " @error('excerpt')  @enderror
                        name="excerpt"
                            id="excerpt"
                            placeholder="Excerpt goes here"
                            value="{{old('excerpt')}}">


                        @if($errors->has('excerpt'))
                            <div class="errorHandle">{{ $errors->first('excerpt') }}</div>
                        @endif
                    </div>
                    <small class="text-muted text-center">Excerpt is required.</small> <br>
                    <small class="text-muted text-center">Excerpt must be at least 10 characters.</small>
                </div>


                <div class="field w-100">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <input
                            class="form-control text-center " @error('body')  @enderror
                        name="body"
                            id="body"
                            placeholder="Body goes here"
                            value="{{ old('body') }}">

                        @if($errors->has('body'))
                            <div class="errorHandle">{{ $errors->first('body') }}</div>
                        @endif
                    </div>
                    <small class="text-muted text-center">Body is required.</small> <br>
                    <small class="text-muted text-center">Body must be at least 10 characters.</small>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
