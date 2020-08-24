<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Be In track</title>

    <!-- Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
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
        <div style="margin-left: 150px">
            <div id="app" class="main row">
                
                    <div class="col-2 ml-2">
                        <div style="margin-top: 10px ;">
                            <img src="/images/logo.jpg" width="30px" height="30px" alt="bb">    
                            <span style="font-size: 14px">Be In track</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <botman-tinker api-endpoint="/botman"></botman-tinker>
                    </div>
                                
            </div>        
    </div>

<script src="/js/app.js"></script>

</body>
</html>