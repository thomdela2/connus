<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="container">
    <nav>
        <div class="left">
            <img class="logo--icon" src="images\connus.icon.white.png" alt="logo">
            <a href="{{ route('influencers') }}">Connus</a>
            <a href="{{ route('blogs') }}">Blogs</a>
            <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('faq') }}">FAQ</a>
        </div>
        <div class="right">
            {{-- <img src="" alt="stripe"> --}}
            {{-- <p><a href="{{ route('influencers') }}">I am an influencer</a></p> --}}
        </div>
    </nav>
</body>
</html>
