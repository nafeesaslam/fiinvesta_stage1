<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color:#42BB95;
               /* background-image: url('/images/bg2.jpg');*/
                background-size:cover;
                height: 200px;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            /*.bgc{
                background-image: url('/images/3.jpg');
                height: 200px;

            }*/
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
                letter-spacing: 15px;
                font-size: 102px;
                font-weight: 450 !important;
                /*background: -webkit-linear-gradient(#cc0066, #3333ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-shadow: 5px 5px 5px grey;*/
                color: #fff;
            }
            #unique{
                margin-top: 30px !important;
                padding-top: 15px !important;
                font-size: 25px;
                color:#fff;
              /*  background: -webkit-linear-gradient(#cc0066, #3333ff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-color: #fff !important;
                text-shadow: 2px 2px 2px #95A5A6;*/
            }
            .accessControls{
                font-size: 14px !important;
                color: #fff !important;
            }
            #access{
                background-color: #fff;
            }
            #uniqueInvest{
                background-color: #fff !important;
            }
        </style>
    </head>
    <body>
        <!-- <div class="bgc">
            
        </div> -->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="accessControls" id="access">Access Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="accessControls">Login</a>
                        <a href="{{ route('register') }}" class="accessControls">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md animated jackInTheBox">
                    FIINVESTA
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" id="unique"> A SMART WAY OF INVESTING</a>
                    <!-- <a href="https://laracasts.com">Learn More...</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
