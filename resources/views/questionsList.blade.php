@extends('dashbord')

@section('content')
    <h1>list of questions</h1>
    {{-- <ul>
        @foreach ($data as $item)
        {{$item->question_txt}}
                @foreach ($item->answers as $key => $answer)
                    @foreach ($answer['answer_text'] as $item)
                        <li>{{$item}}</li>
                    @endforeach                
                @endforeach    
        @endforeach
    </ul> --}}
<div class="row">
@foreach ($data as $item)
  <div class="card-group col-4">
    <div class="card m-2">
      <div class="card-body">
        <h5 class="card-title">{{$item->question_txt}}</h5>
        @foreach ($item->answers as $key => $answer)
                    @foreach ($answer['answer_text'] as $item)
                    <p class="card-text">{{$item}}</p>        
                  @endforeach                
        @endforeach    
      </div>
    </div>
</div>
@endforeach
      
@endsection
</div>


<link rel="stylesheet" href="{{asset('bootstrap-4.4.1/dist/css/bootstrap.css')}}">