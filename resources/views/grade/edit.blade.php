@extends('layout.layout')

@section('content')

    <header class="textShadow">Edit</header>

    <form method="POST" action="/grade/{{ $grade->id }}">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <th>Course</th>
                <th>EC</th>
            </tr>
            <tr>
                <label class="label" for="course"></label>

                <td>
                    <input class="input" type="text" name="course" id="course" placeholder="{{ $grade->course }}">
                </td>

                <label class="label" for="EC"></label>

                <td>
                    <input class="input" type="text" name="EC" id="EC" placeholder="{{ $grade->EC }}">
                </td>
            </tr>
        </table>






@endsection

