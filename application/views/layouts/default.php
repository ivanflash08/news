<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="/public/styles/style.css" />
    <link rel="stylesheet" href="/public/styles/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/public/styles/default/default.css" type="text/css" media="screen" />

</head>
<body id="home">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <img class="logo" src="/public/images/logo.png" alt="">
        </div>
        <nav class="right">
            <ul>
                <li><a href="/" id="homenav">Главная</a></li>
                <!--                <li><a href="/post" id="fullwidthnav">Full width</a></li>-->
                <li><a href="/contact" id="contactnav">Обратная связь</a></li>
                <li><a href="/about">Об Авторе</a></li>
            </ul>
        </nav>
    </header>
<?php echo $content; ?>

<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/form.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/public/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
</body>
</html>
