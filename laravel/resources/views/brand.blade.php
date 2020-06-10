<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="container">
    <nav>
        <div class="left">
            <img class="logo--icon" src="images\connus.icon.white.png" alt="logo">
            <a id="name" href="{{ route('brands') }}">Connus</a>
            <a href="{{ route('blogs') }}">Blogs</a>
            <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('faq') }}">FAQ</a>
        </div>
        <div class="right">
            <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
            <a href="{{ route('influencers') }}">I am an influencer</a>
        </div>
    </nav>
</body>
</html>
