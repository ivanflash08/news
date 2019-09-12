<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/public/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
<div class="slider-wrapper theme-default mt-5">
    <div id="slider" class="nivoSlider">
        <img src="/public/images/slide1.jpg" alt=""/>
        <img src="/public/images/slide2.jpg" alt="" title=""/>
        <img src="/public/images/slide3.jpg" alt="" title=""/>
        <img src="/public/images/slide4.jpg" alt=""/>
    </div>
</div>
<script type="text/javascript">
    $(window).load(function () {
        $('#slider').nivoSlider({pauseTime: 6000,});
    });
</script>

<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
<section>
    <div id="line" class="mb-5">
        <h1 class="line">Последние Сатьи</h1>
    </div>
    <div id="ourserv">
        <?php if (empty($list)): ?>
            <h3>Нет ниодной статьи</h3>
        <?php else : ?>
            <?php foreach ($list as $val) : ?>

                <article class="mainPos d-flex">
                    <div class="article_wrapper mb-5">
                        <h2 class=""> <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                        <a href="/post/<?php echo $val['id']; ?>">
                            <img class="imagePrew" src="/public/materials/<?php echo $val['id']; ?>.jpg" alt=""/>
                        </a>
                        <p class="heightDes"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></p>
                        <a href="/post/<?php echo $val['id']; ?>" class="rm">Читать дале</a>
                        <p>Опубликовано : <?php echo htmlspecialchars($val['date'], ENT_QUOTES); ?></p>
                        <hr>
                    </div>
                </article>
            <?php endforeach ?>
            <div class="pagination justify-content-center"><?php echo $pagination; ?></div>
        <?php endif ?>
    </div>


</section>
<footer>
</footer>


</div>
</body>
</html>




