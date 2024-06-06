<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My First PHP</title>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="blocco-s">
                <ul class="list-group w-70">
                    @foreach ($blocco_s as $s)
                    <li>{{ $s }}</li>
                    @endforeach
                </ul>
            </div>

            <a class="blocco-c" href="{{ route('home') }}"><div>Il tuo scam di fiducia</div></a>

            <div class="blocco-r">
                <ul class="list-group w-70">
                    @foreach ($blocco_r as $r)
                    <li>{{ $r }}</li>
                    @endforeach
                    <li>
                        <div class="container-log">
                            <span class="border-log-in">{{ $logIn }}</span>
                            <span class="border-sign">{{ $register }}</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bott-nav">
            <ul class="list-group w-100">
                @foreach ($languages as $lang)
                <li>
                    <a href="{{ route('language.show', ['lang' => strtolower($lang)]) }}">{{ $lang }}</a>
                </li>
                @endforeach
            </ul>

        </div>
    </nav>