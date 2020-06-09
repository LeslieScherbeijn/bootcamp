@extends('layout.layout')

@section('content')

    <h1>{{$assignment->test}}</h1>
    <table>
        <tr>

            <th>Weging(%)</th>
            <th>EC</th>
            <th>score</th>
            <th>passed</th>
        </tr>
        <tr>
            <td> {{$assignment->weighting}}</td>
            <td> {{$assignment->EC}}</td>
            <td> {{$assignment->score}}</td>
            <td>{{$assignment->passed}}</td>
        </tr>
    </table>
@endsection
