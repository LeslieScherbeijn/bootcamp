@extends('layout.layout')

@section('content')

    <header class="textShadow">Studiemonitor</header>

    <h1>Mijn vakken</h1>
    <table class='monitor'>
        <tr>
            <th>Cursus</th>

            <th>EC</th>

        </tr>
        @foreach($grade as $grade)
            <tr>
                <td>
                    <a href="{{ route('grade.show', $grade) }}">
                        {{$grade->course}}
                    </a>
                </td>

                <td>
                    <a href="{{ route('grade.show', $grade) }}">
                        {{$grade->EC}}
                    </a>
                </td>


            </tr>

        @endforeach
    </table>




@endsection
