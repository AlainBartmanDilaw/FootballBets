<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Football Bets</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .top {}

        .m-b-md {
            position: absolute;
            top: 10px;
            margin-bottom: 30px;
        }

        .bottom {
            position: absolute;
            margin-bottom: 10px;
            bottom: 18px;
        }
    </style>
</head>

<body>

    @extends('layouts.app')

    <div class="flex-center position-ref full-height">
        <div class="top-left links">
            <a href="{{ url('locale/en') }}"><i class="fa fa-language"></i> EN</a>
            <a href="{{ url('locale/fr') }}"><i class="fa fa-language"></i> FR</a>
        </div>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">{{ __('message.Login') }}</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('message.Register') }}</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content flex-center">
            <div class="title top m-b-md">
                Football Bets - {{ __('message.WithFriendsBets') }}
            </div>
            <div class="">
                {{__('message.Rules')}}
            </div>


            <div class="flex-center position-ref links bottom">
                <div class="links bottom">
                    {{__('message.DevelopedUsing')}}<a href="https://laravel.com/">Laravel</a>
                </div>
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>