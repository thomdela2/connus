<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand - Advertisement | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="container">
    <nav>
        <div class="left">
            <img src="..\public\images\connus.icon.blue.png" alt="logo">
            <p><a href="{{ route('brands') }}">Connus</a></p>
            <p><a href="{{ route('blogs') }}">Blogs</a></p>
            <p><a href="{{ route('team') }}">Team</a></p>
        <p><a href="{{ route('faq') }}">FAQ</a></p>
        </div>
        <div class="right">
            <img src="" alt="stripe">
            <p><a href="{{ route('influencers') }}">I am an influencer</a></p>
        </div>
    </nav>
</body>
</html>
