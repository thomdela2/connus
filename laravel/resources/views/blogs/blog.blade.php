<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog | Connus</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="images\favicon\apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images\favicon\favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images\favicon\favicon-16x16.png">
	<link rel="manifest" href="images\favicon\site.webmanifest">
	<link rel="mask-icon" href="images\favicon\safari-pinned-tab.svg" color="#008fff">
	<link rel="shortcut icon" href="images\favicon\favicon.ico">
	<meta name="msapplication-TileColor" content="#ebf2f5">
	<meta name="msapplication-config" content="images\favicon\browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

</head>

<body>
    <div class="desktop">
        <div class="navigationcontainer">
            <div class="leftnav blognav">
                <img class="logo--icon" href="{{ route('influencers') }}" src="images\connus.icon.blue.png" alt="logo">
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
