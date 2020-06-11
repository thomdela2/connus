<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog | Connus</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="desktop">
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

        <div class="blog-container">

            @foreach ($blogs as $blog)

            <div class="blog">
                <h1>{{ $blog->title }}</h1>
                <h2>{{ $blog->content }}</2>
            </div>

            @endforeach

        </div>
    </div>
</body>

</html>
