<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand | Connus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/e9fc8806c8.js" crossorigin="anonymous"></script>

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

    <div class="indevelopment">
        <p class="title"><span>We are currently working</span><span>on the mobile website</span></p>
    </div>

    <div class="desktop">

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
            <img class="adv--background" src="images\backgrounds\advertentie.png" alt="adv--brand">
            <img class="section--background" src="images\backgrounds\lastsection.png" alt="lastsec--brand">
            <img class="footer--background" src="images\backgrounds\footer.png" alt="footer--background">
        </div>

        <div class="section--first">
            <p class="title">More business. More customers.<br>More sales. More revenue.</p>
            <p class="subtitle">Real people buy your products,<br>but real people can sell your products too.</p>
            <div class="section-adv">
                <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
                <a href="">Open desktop app</a>
            </div>
            <div class="download--btns">
                <a href="https://play.google.com/store/apps/details?id=com.nebulae.connus&hl=nl" target="_blank"><img
                        class="download--btn" src="images\icons\GooglePlay.png" alt="GooglePlay"></a>
                <a href="https://apps.apple.com/gb/app/connus/id1490442304?l=nl"><img class="download--btn"
                        src="images\icons\AppleStore.png" alt="AppleStore"></a>
            </div>
        </div>

        <img class="header--phone" src="images\backgrounds\header--phone.png" alt="header--phone">

        <div class="section--second">
            <p class="title">To be announced</p>
            <div class="subtitle sub-center">
                <span class="bold">This is not the official text</span>
                <span>Truth is, you inspire all day by being yourself.</span>
                <span>We see your value and want to help you building your personal brand.</span>
                <span>Through Connus you can experience, explore and share your experience</span>
                <span>with influencer marketing in a transparent way,</span>
                <span>new collaborations, all at your own pace.</span>
            </div>
        </div>

        <div class="section--third">
            <p class="title">Developed for entrepreneurs like you</p>
            <div class="subtitle sub-center">
                <span class="bold">This is not the official text</span>
                <span>No more domination, all room to negotiate and a fair remuneration.</span>
                <span>Yes, you read that right. We let you work for yourself.</span>
                <span>There are no boundaries in connecting.</span>
                <span>It is about how fantastic we can make influencer marketing together</span>
            </div>
        </div>

        <img class="swipe--phone" src="images\swipe.png" alt="swipe">

        <div class="stats--brand stat--danone">
            <img class="img danone" src="images\icons\danone2purple.png" alt="Danone">
        </div>

        <div class="stats--brand stat--registratedBrands">
            <i class="number stat--icon">103</i>
            <a class="stat--info"><span>Registrated</span><span class="bold">brands</span></a>
        </div>

        <div class="stats--brand stat--tagmag">
            <img class="img tagmag" src="images\icons\tagmag.png" alt="TagMag">
        </div>

        <div class="stats--brand stat--boardx">
            <img class="img boardx" src="images\icons\boardx-logo-p.png" alt="Breydel">
        </div>

        <div class="stats--brand stat--registratedinfluencers">
            <i class="number stat--icon">93</i>
            <a class="stat--info"><span>Registrated</span><span class="bold">influencers</span></a>
        </div>

        <div class="stats--brand stat--cake">
            <img class="img cake" src="images\icons\cake2.png" alt="cake">
        </div>

        <div class="stats--brand stat--createdMatches">
            <i class="number stat--icon">186</i>
            <a class="stat--info"><span>Created</span><span class="bold">matches</span></a>
        </div>

        <div class="stats--brand stat--breydel">
            <img class="img breydel" src="images\icons\breydel.png" alt="boardx">
        </div>

        <div class="section--fourth">
            <p class="title"><span>Find out what</span><span>influencer you need</span></p>
                <div class="influencertypenav">
                    <ul>
                        <li id="mega">Mega</li>
                        <li id="macro"">Macro</li>
                        <li id="meso">Meso</li>
                        <li id="micro">Micro</li>
                        <li id="nano">Nano</li>
                    </ul>
                </div>
                <div class="influencertypebio mega">
                    <p class="biotitle">Mega-influencers</p>
                    <p class="biodigits">Over 1M followers</p>
                    <div class="categoryoverview">
                        <div class="category">
                            <p class="categoryname">Reach</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Engagement</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Complexity</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Trust</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Cost</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="influencertypebio macro">
                    <p class="biotitle">Macro-influencers</p>
                    <p class="biodigits">100K - 1M followers</p>
                    <div class="categoryoverview">
                        <div class="category">
                            <p class="categoryname">Reach</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Engagement</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Complexity</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Trust</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Cost</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="influencertypebio meso">
                    <p class="biotitle">Meso-influencers</p>
                    <p class="biodigits">20K - 100K followers</p>
                    <div class="categoryoverview">
                        <div class="category">
                            <p class="categoryname">Reach</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Engagement</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Complexity</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Trust</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Cost</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="influencertypebio micro">
                    <p class="biotitle">Micro-influencers</p>
                    <p class="biodigits">5K - 20K followers</p>
                    <div class="categoryoverview">
                        <div class="category">
                            <p class="categoryname">Reach</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Engagement</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Complexity</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Trust</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Cost</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="influencertypebio nano">
                    <p class="biotitle">Nano-influencers</p>
                    <p class="biodigits">1K - 5K followers</p>
                    <div class="categoryoverview">
                        <div class="category">
                            <p class="categoryname">Reach</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Engagement</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Complexity</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Trust</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                                <span class="cirkel active"></span>
                            </div>
                        </div>
                        <div class="category">
                            <p class="categoryname">Cost</p>
                            <div>
                                <span class="cirkel active"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                                <span class="cirkel noneactive"></span>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        <div class="section--fifth">
            <p class="title">Engagement rate</p>
            <div class="subtitle sub-center">
                <span>The engagement rate reflects in what extent your influencer
                    connects to it's followers.</span>
                    <span>It show the interaction between
                    influencer and audience.</span> <span class="bold">What we see is that Micro influencers
                    have an ER of 2,93%</span><span class="bold">while Nano-influencers has an ER
                    over 6.44%.</span>
            </div>
        </div>

        <img class="imageEngRate" src="images\backgrounds\engagementrate.png" alt="engagementrate">

        <div class="section-advertention ad-brand">
            <p class="title">
                <span>Advertisement</span><span>revenue model</span>
            </p>
            <div class="subtitle sub-center">
                <span class="bold">At Connus, you only pay when you get found.</span>
                <span>This 'click-based' advertising gives you the</span>
                <span>security that you pay when your brand raises</span>
                <span>it's brand-awareness or when you connect
                to influencers.</span>
            </div>
            <div class="section-adv">
                <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
                <a href="{{ route('brand-ads') }}">Advertising at Connus</a>
            </div>
        </div>

        <img class="imageIphone--ad" src="images\iPhone11tagmag.png" alt="Iphone--ad">

        <div class="kbc-start kbc-brand">
            <p class="kbc-title">Proud partner of</p>
            <a href="https://startit.be/"><img src="images\startitkbc.png" alt="startitkbc" class="kbc-image"></a>
        </div>

        <img class="img-cta" src="images\profiel.png" alt="profiel">

        <div class="cta">
            <div class="cta-content">
                <p class="title"><span>Find your perfect</span><span>influencer right now!</span></p>
                <div class="section-adv">
                    <img class="line--icon" src="images\connus.line.black.png" alt="stripe">
                    <a href="">Open desktop app</a>
                </div>
                <div class="download--btns">
                    <a href="https://play.google.com/store/apps/details?id=com.nebulae.connus&hl=nl" target="_blank"><img
                            class="download--btn" src="images\icons\GooglePlay.png" alt="GooglePlay"></a>
                    <a href="https://apps.apple.com/gb/app/connus/id1490442304?l=nl"><img class="download--btn"
                            src="images\icons\AppleStore.png" alt="AppleStore"></a>
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="footer--form">
                <p class="title">Keep posted by Connus!</p>
                <form action="">
                    <input type="email" name="email" id="mail" placeholder="Please insert your e-mail">
                    <div class="section-adv">
                        <img class="line--icon" src="images\connus.line.white.png" alt="stripe">
                        <button type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="footer--info">
                <div class="footer--language">
                    <p class="info"><a>English</a></p>
                    {{-- <p class="info"><a>Français</a></p>
                    <p class="info"><a>Nederlands</a></p> --}}
                </div>
                <div class="footer--boldagency">
                    <p class="info">Made by <a href="https://www.boldagency.be/" target="_blank">Bold Agency</a></p>
                </div>
                <div class="footer--policy">
                    <p class="info"><a href="#">Privacy Policy</a></p>
                </div>
                <div class="footer--socials">
                    <a href="https://www.instagram.com/connus_be/?hl=nl" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="https://www.instagram.com/connus_be/?hl=nl" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://www.facebook.com/Connus-104463651083787/" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
