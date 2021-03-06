<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phone Klinic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #212121;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #banner{
                color:  #29b6f6;
                background: #cfd8dc ;
                 -webkit-background-size: cover;
             -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
            }
            img.navcover{
                /* Set rules to fill background #84ffff */
                 min-height: 100%;
                min-width: 1024px;
    
  /* #311b92Set up proportionate scaling */
                width: 100%;
                height: auto;
    
  /*#84ffff Set up positioning */
                position: fixed;
             top: 0;
              left: 0;
            }
        </style>
    </head>
    <body>
        <div id="banner" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
             
            <div class="content">
                <div style="color:black" class="">
                    <a href="{{ url('/home') }}"><img id="firstHead" src="/dist/img/icon.png"></a>
                  
                </div>

                <div class="links" style="margin-top: 50px">
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="{{ route('phones.index') }}">admin</a>
                   
                </div>
            </div>
        </div>
        
    </body>

</html>
