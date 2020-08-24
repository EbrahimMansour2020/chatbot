@extends('dashbord')

@section('content')
<div style="margin-left: 250px ; width:600px ">
    <form method="POST" action="/createQuestion" >
        <h3 class="text-center m-2"> -- Create Question -- </h3>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="exampleFormControlInput1">Question</label>
          <input type="text" class="form-control" name="question_txt" id="question_txt" placeholder="Enter Your Question">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">First Answer</label>
            <input type="text" class="form-control" name="first_answer" id="first_answer" placeholder="Enter First Answer">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Second Answer</label>
            <input type="text" class="form-control" name="second_answer" id="second_answer" placeholder="Enter Second Answer">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Third Answer</label>
            <input type="text" class="form-control" name="third_answer" id="third_answer" placeholder="Enter Third Answer">
          </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Create Question">
        </div>
      </form>
    </div>
@endsection