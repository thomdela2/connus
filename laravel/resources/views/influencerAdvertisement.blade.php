<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Influencer - Advertisement | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="overview">
    <div class="navigationcontainer">
        <div class="leftnav">
            <img src="..\public\images\connus.icon.blue.png" alt="logo">
            <p><a href="{{ route('influencers') }}">Connus</a></p>
            <p><a href="{{ route('blogs') }}">Blogs</a></p>
            <p><a href="{{ route('team') }}">Team</a></p>
        <p><a href="{{ route('faq') }}">FAQ</a></p>
        </div>
        <div class="rightnav">
            <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
            <p><a href="{{ route('brands') }}">I am a brand</a></p>
        </div>
    </div>
</body>
</html>
