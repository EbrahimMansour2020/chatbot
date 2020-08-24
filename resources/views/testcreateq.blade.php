@extends('dashbord')

<style>
    .form-control{
        margin: 5px;
    }
</style>
@section('content')

<div style="margin-left: 250px ; width:600px ">
    <form method="POST" action="/createQuestion" >
        <h3 class="text-center m-2"> -- Create Question -- </h3>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label for="exampleFormControlInput1">Question</label>
          <input type="text" class="form-control" name="question_txt" id="question_txt" placeholder="Enter Your Question">
          <input type="hidden" class="form-control" id="inputcounts" name="inputcounts" placeholder="answers count">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> 
                <label>Answers </label>
                <input type="button" class="btn btn-primary" id="addanswer" value="Add answers" style="margin-left: 380px">
            </label>
          </div>
        <div class="form-group" id="answers" >
            {{-- <label for="exampleFormControlInput1"> 
                <label>Answers </label>
                <input type="button" class="btn btn-primary" id="addanswer" value="Add answers" style="margin-left: 380px">
            </label> --}}
            {{-- <input type="text" class="form-control"> --}}
          </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Create Question">
        </div>
      </form>
    </div>
@endsection

<link rel="stylesheet" href="{{asset('bootstrap-4.4.1/dist/css/bootstrap.css')}}">


<script>
    window.addEventListener("load",function(){
                
        var i=0;
        addanswer.addEventListener("click",function(){
                // var count=0;
                    
                var inp = document.createElement("input");
                var answer = "answer" + i;
                    inp.setAttribute("class","form-control");
                    inp.setAttribute("name",answer);
                document.getElementById("answers").appendChild(inp);
                // alert(answersCount);
                    form =  document.getElementById("answers");
                    var count = form.getElementsByTagName("input").length;
                    document.getElementById("inputcounts").setAttribute("value",count);
                console.log(count);
                i++;
            })
            
    })
</script>