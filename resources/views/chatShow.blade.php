<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<link rel="stylesheet" href="/chat/chat.css">
</head>
<body>
    <div class="container mt-2">
        @include('nav')
        <div id="frame">
            <div id="sidepanel">
                <div id="profile">
                    <div class="wrap">
                        <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                        <p>Be in Track</p>
                        <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                        <div id="status-options">
                            <ul>
                                <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                                <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                                <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                                <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                            </ul>
                        </div>
                        <div id="expanded">
                            <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                            <input name="twitter" type="text" value="mikeross" />
                            <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                            <input name="twitter" type="text" value="ross81" />
                            <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                            <input name="twitter" type="text" value="mike.ross" />
                        </div>
                    </div>
                </div>
                <div id="search">
                    <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                    <input type="text" placeholder="Search contacts..." />
                </div>
                <div id="contacts">
                    <ul>
                        @foreach ($data as $client)
                                               
                            <a class="nav-item nav-link" href="/everychat/{{$client->id}}" style="color:  white">
                            <li class="contact">
                                <div class="wrap">
                                    <span class="contact-status online"></span>
                                    <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                                    <div class="meta">
                                        <p class="name">{{$client->name}}</p>
                                        <p class="preview">You just got LITT up, Mike.</p>
                                    </div>
                                </div>
                            </li>
                        </a>
                        @endforeach
                    </ul>
                </div>
                <div id="bottom-bar">
                    <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                    <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
                </div>
            </div>

            {{-- j       jkkk --}}

            @yield('everyChat')

        </div>
        
    </div>
    
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
</body>
</html>