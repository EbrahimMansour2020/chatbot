
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/chatshow')}}">Be In Track</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            {{-- <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a> --}}
            {{-- <a class="nav-item nav-link" href="{{url('/chatbot')}}">Chat</a> --}}
            {{-- <a class="nav-item nav-link" href="{{url('/dash')}}">Dashbord</a> --}}
            {{-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            <a class="nav-item nav-link" href="{{url('/chatshow')}}">Client List</a>
                    <a class="nav-item nav-link" href="{{url('/questionList')}}">All Questions</a>                
                    <a class="nav-item nav-link" href="{{url('/createQuestion')}}">Create Questions</a>                
          </div>
        </div>
      </nav> 

      <link rel="stylesheet" href="{{asset('bootstrap-4.4.1/dist/css/bootstrap.css')}}">
      <style>
        body{
          background: #dee3ee;
        }
      </style>