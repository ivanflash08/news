<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/public/styles/style.css" />
    <link rel="stylesheet" href="/public/styles/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/public/styles/default/default.css" type="text/css" media="screen" />

    <title>Source X SRT</title>
</head>
<body id="contact">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <h1>Source X <span id="ii">II</span>  <span id="srt">SRT</span></h1>
            <div id="tagline">
                <h2>Just another Geeksband Template !</h2>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/" id="homenav">главная</a></li>
<!--                <li><a href="/post" id="fullwidthnav">Статьи</a></li>-->
                <li><a href="/contact" id="contactnav">обратная связь</a></li>
                <li><a href="/about">О нас</a></li>
            </ul>
        </nav>
    </header>

    <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
    <section>
        <div id="contactpost">
            <h1>Написать Администратору</h1>
            <p>заполните все даные и отправте сообщение:</p>
            <form method="post" action="/contact">
                <div id="contactform">
                    <p><label for="name">Имя</label><input type="user" name="name" id="name" placeholder="your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ваше имя'" /></p>
                    <p><label for="email">Email</label><input type="email" name="email" id="email" placeholder="your@email.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'your@email.com'" /></p>
                    <p><label for="message">Сообщение</label><textarea name="message" id="message"></textarea></p>
                    <p style="padding-top: 105px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="отправить" /></p>
                </div>
            </form>
            &nbsp;
            <p><NOT></NOT></p>
        </div>

        <!--__--__--__--  S I D E B A R --__--__--__--__-->
        <div id="sidebar">
            <aside class="asd__contact">

            </aside>
            <aside>

            </aside>
        </div>
    </section>
    <!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
    <footer>
         </footer>
</div>
</body>
</html>





