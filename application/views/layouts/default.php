<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="/public/styles/style.css" />
    <link rel="stylesheet" href="/public/styles/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/public/styles/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/public/styles/bootstrap.min.css">

</head>
<body id="home">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <a href="/">
            <img class="logo" src="/public/images/logo.png" alt="">
            </a>
        </div>
        <nav class="nav nav-tabs mt-3 right">
            <ul>
                <li><a href="/" id="homeNav" class="nav-link">Главная</a></li>
                <li><a href="/herbs" id="homeNav" class="nav-link">Травы</a></li>
                <li><a href="/tea" id="homeNav" class="nav-link">Чаи</a></li>
                <li><a href="/tinctures" id="homeNav" class="nav-link">Настойки</a></li>
                <li><a href="/about" id="aboutNav" class="nav-link">О Нас</a></li>
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
