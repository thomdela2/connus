<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Influencer | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/e9fc8806c8.js" crossorigin="anonymous"></script>
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
            <img class="adv--background" src="images\backgrounds\advertentie.png" alt="adv--brand">
            <img class="section--background" src="images\backgrounds\lastsection.png" alt="lastsec--brand">
            <img class="footer--background" src="images\backgrounds\footer.png" alt="footer--background">
        </div>

        <div class="section--first">
            <p class="title"><span>We see you and how you</span><span>can change the world</span></p>
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

        <div class="stats--influencer stat--love">
            <i class="fas fa-heart fa-2x stat--icon"></i>
            <a class="stat--info"><span class="bold">+33</span></a>
        </div>

        <div class="stats--influencer stat--registratedBrands">
            <i class="number stat--icon">103</i>
            <a class="stat--info"><span>Merken zijn al</span><span class="bold">geregistreerd</span></a>
        </div>

        <div class="stats--influencer stat--msg">
            <i class="fas fa-comment-alt fa-2x fa-flip-horizontal stat--icon "></i>
            <a class="stat--info"><span class="bold">+12</span></a>
        </div>

        <div class="stats--influencer stat--registratedinfluencers">
            <i class="number stat--icon">93</i>
            <a class="stat--info"><span>Influencers zijn al</span><span class="bold">geregistreerd</span></a>
        </div>

        <div class="stats--influencer stat--money">
            <i class="fas fa-comment-dollar fa-2x stat--icon "></i>
            <a class="stat--info"><span class="bold">+€121</span></a>
        </div>

        <div class="stats--influencer stat--createdMatches">
            <i class="number stat--icon">186</i>
            <a class="stat--info"><span>Gecreeërde</span><span class="bold">matches</span></a>
        </div>

        <div class="stats--influencer stat--plane">
            <i class="fas fa-paper-plane fa-2x stat--icon "></i>
            <a class="stat--info"><span class="bold">+€603</span></a>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
