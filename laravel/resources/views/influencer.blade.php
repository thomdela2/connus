<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Influencer | Connus</title>
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
                <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
                <a href="{{ route('brands') }}">I am a brand</a>
            </div>
        </div>
        <div class="background-images">
            <img class="header--background" src="images\backgrounds\header.png" alt="header--background">
            <img class="bassline--background" src="images\backgrounds\bassline.png" alt="bassline--background">
            <img class="infographic--background" src="images\backgrounds\infographic.png" alt="infographic--background">
            <img class="main--background" src="images\backgrounds\main--influencer.png" alt="main--influencer">
            <img class="footer--background" src="images\backgrounds\footer.png" alt="footer--background">
        </div>

        <div class="section--first">
            <p class="title">We see you and how you<br>can change the world</p>
            <p class="subtitle">A breakthrough in creating intuitive new opportunities<br>to inspire others through
                influencer marketing.</p>
            <div class="download--btns">
                <a href="https://play.google.com/store/apps/details?id=com.nebulae.connus&hl=nl" target="_blank"><img
                        class="download--btn" src="images\icons\GooglePlay.png" alt="GooglePlay"></a>
                <a href="https://apps.apple.com/gb/app/connus/id1490442304?l=nl"><img class="download--btn"
                        src="images\icons\AppleStore.png" alt="AppleStore"></a>
            </div>
        </div>

        <img class="header--phone" src="images\backgrounds\header--phone.png" alt="header--phone">

        <div class="section--second">
            <p class="title">Everyone has an influence</p>
            <div class="subtitle sub-center">
                <span>You don’t need big numbers on your socials to inspire others.</span>
                <span>Truth is, you inspire all day by being yourself.</span>
                <span class="bold">We see your value and want to help you building your personal brand.</span>
                <span>Through Connus you can experience, explore and share your experience</span>
                <span>with influencer marketing in a transparent way,</span>
                <span>new collaborations, all at your own pace.</span>
            </div>
        </div>

        <div class="section--third">
            <p class="title">Nothing like an agency.</p>
            <div class="subtitle sub-center">
                <span class="bold">Connus allows you to be the owner of your personal brand and accelerate.</span>
                <span>No more domination, all room to negotiate and a fair remuneration.</span>
                <span>Yes, you read that right. We let you work for yourself.</span>
                <span>There are no boundaries in connecting.</span>
                <span>It is about how fantastic we can make influencer marketing together</span>
            </div>
        </div>

        <img class="swipe--phone" src="images\swipe.png" alt="swipe">

    </div>
</body>

</html>
