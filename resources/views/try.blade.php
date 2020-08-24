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
   <link rel="stylesheet" href="js/file.css">
   <style>
       input[type="button"]{
           background: red;
       }
       .ChatLog{
            height: 390px;
            width: 100%;
            overflow:auto;
            margin-left:40px;
            margin-bottom: 10px; 
        }
   </style>
</head>
<body>
    <div class="container">

            @include('chatnav')
            
<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
				<p>Be In Track</p>
				<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>				
			
			</div>
		</div>
	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
			<p>Be In Track</p>			
		</div>
        <div id="app">        
            <botman-tinker api-endpoint="/botman"></botman-tinker>                    
        </div>        
        
	</div>
</div> 

<script src="/js/app.js"></script>

</body>
</html>