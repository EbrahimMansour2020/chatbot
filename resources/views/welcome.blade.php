<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Be In Track</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
        .*{
            margin: 0;
            padding: 0;
        }
        .*{
            margin: 0px;
            padding: 0px;
        }
        body {
            font-family: "Source Sans Pro", sans-serif;            
            background: radial-gradient(#c9e6f1, #f1ebf1d8);
        }        
        .main{
            width: 800px;
            height: 500px;
            border: 2px solid black;
            border-radius: 50px;
            margin-top: 10px;
            padding: 10px;            
        }
        .ChatLog{
            height: 400px;
            width: 90%;
            border: 2px solid black;
            border-radius: 20px;
            overflow:auto;
            margin-left: 
        }
        ul{
            margin-top: 10px;
        }
    </style>
        
</head>
<body>    
    <div class="container mt-2">
        <div>
            @include('chatnav')
        </div>
        <h3 style="text-align: center ; margin:10px">Click Message in the Bottom to Chat Me </h3>        
        <div style="margin-left: 150px">
            <img src="/images/logo.jpg" width="300px" height="300px" alt="bb" style="align-items: center" >    
        </div>
<script>
    var botmanWidget = {
        frameEndpoint: '/botman/chat',
        title: 'Natacha',
        introMessage: '{{$intromsg}}',
        mainColor: 'whitepink',
        bubbleBackground: 'lightgreen',
        bubbleAvatarUrl:'/images/msg1.png',
        aboutText:'powered by Be In Track',

    };
        </script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>
</html>