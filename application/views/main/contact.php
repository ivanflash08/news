<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
<section>
    <div id="contactpost">
        <h1>Написать Администратору</h1>
        <p>заполните все даные и отправте сообщение:</p>
        <form method="post" action="/contact">
            <div id="contactForm">
                <label for="name">Имя</label>
                    <input type="name" name="name" id="name" placeholder="your name"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Ваше имя'"/>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="your@email.com"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'your@email.com'"/>
                    <label for="message">Сообщение</label>
                    <textarea name="message" id="message"></textarea>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit"
                                                                        name="contact_submitted" value="отправить"/>
                </p>
            </div>
        </form>
        &nbsp;
    </div>

    <!--__--__--__--  S I D E B A R --__--__--__--__-->
    <div id="sidebar">
        <aside class="asd__contact">

        </aside>
        <aside>

        </aside>
    </div>
</section>
<footer>
</footer>
</div>
</body>
</html>





