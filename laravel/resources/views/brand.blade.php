<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="overview">
    <div class="navigationcontainer">
        <div class="leftnav">
            <img class="logo--icon" href="{{ route('brands') }}" src="images\connus.icon.white.png" alt="logo">
            <a id="name" href="{{ route('brands') }}">Connus</a>
            <a href="{{ route('blogs') }}">Blogs</a>
            <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('faq') }}">FAQ</a>
        </div>
        <div class="rightnav">
            <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
            <a href="{{ route('influencers') }}">I am an influencer</a>
        </div>
    </div>
    <div class="maincontent">
        <img class="header--background" src="images\backgrounds\header.png" alt="header--background">
        <img class="bassline--background" src="images\backgrounds\bassline.png" alt="bassline--background">
        <img class="infographic--background" src="images\backgrounds\infographic--purple.png" alt="infographic--background">
        <img class="main--background" src="images\backgrounds\main--brand.png" alt="main--brand">
        <img class="footer--background" src="images\backgrounds\footer.png" alt="footer--background">
    </div>
</body>
</html>
