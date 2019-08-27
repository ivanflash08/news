<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/public/styles/style.css" />
    <link rel="stylesheet" href="/public/styles/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/public/styles/default/default.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="/public/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Source X SRT</title>
</head>
<body id="home">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <h1>Source X <span id="iisrt"><span id="ii">II</span>  <span id="srt">SRT</span></span></h1>
            <div id="tagline">
                <h2>Just another Geeksband Template !</h2>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/" id="homenav">Главная</a></li>
                <!--                <li><a href="/post" id="fullwidthnav">Full width</a></li>-->
                <li><a href="/contact" id="contactnav">Обратная связь</a></li>
                <li><a href="/about">О нас</a></li>
            </ul>
        </nav>
    </header>

    <!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="/public/images/slide1.jpg" alt="" />
            <a href="http://geeksband.com"><img src="/public/images/slide2.jpg" alt="" title="This is an example of a caption with a link" /></a>
            <img src="/public/images/slide3.jpg" alt="" title="This is an example of a caption" />
            <img src="/public/images/slide4.jpg" alt="" />
        </div>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({pauseTime: 6000,});
        });
    </script>

    <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
    <section>
        <div id="line">
            <div class="dline"></div>
            <h1>Our Services</h1>
            <div class="dline"></div>
        </div>
        <div id="ourserv">
            <article>
                <h1>Web Design</h1>
                <img src="/public/images/1.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet.</p>
                <a href="fullwidth.html" class="rm">Read More</a>
            </article>
            <article>
                <h1>Graphic Design</h1>
                <img src="/public/images/2.jpg" alt="" />
                <p>Consectetuer adipiscing elit. Suspendisse enim elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit.</p>
                <a href="fullwidth.html" class="rm">Read More</a>
            </article>
            <article class="lastarticle">
                <h1>Web Development</h1>
                <img src="/public/images/3.jpg" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit enim.</p>
                <a href="fullwidth.html" class="rm">Read More</a>
            </article>
        </div>

    </section>
    <!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
    <footer>
        <p>Copyright &copy 2013 Source X by Youssef Nassim and Zakariya Lhamri, design from <a href="http://geeksband.com">Geeksband.com</a>. All Rights Reserved.</p>
    </footer>
</div>
</body>
</html>




