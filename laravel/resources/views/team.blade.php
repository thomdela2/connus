<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="overview">
    <div class="navigationcontainer">
        <div class="leftnav">
            <img class="logo--icon" href="{{ route('influencers') }}" src="images\connus.icon.white.png" alt="logo">
            <a id="name" href="{{ route('influencers') }}">Connus</a>
            <a href="{{ route('blogs') }}">Blogs</a>
            <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('faq') }}">FAQ</a>
        </div>
        <div class="rightnav">
            {{-- <img src="" alt="stripe"> --}}
            {{-- <p><a href="{{ route('influencers') }}">I am an influencer</a></p> --}}
        </div>
    </div>
    <div class="background-images">
        <img class="header--background" src="images\backgrounds\header.png" alt="header--background">
    </div>
</body>
</html>
