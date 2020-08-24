@extends('dashbord')

@section('content') 
    <h1>clients list</h1>
    {{-- {{$data->id}} --}}
    <ul>
        @foreach ($data as $d)
            <li>{{$d->clients['name']}}</li>
        @endforeach
    </ul>
--------------------
    <ul>
        @foreach ($data as $d)
        {{$d->clients['name']}}
            <ol>{{$d->questions['question_txt']}}
                <li>{{$d->answer}}</li>
            </ol>
        @endforeach
    </ul>
@endsection