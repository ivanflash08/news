<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
<section>
    <div id="line" class="mb-5">
        <h1 class="line">Чаи</h1>
    </div>
    <div id="ourserv">
        <?php if (empty($list)): ?>
            <h3>Нет ниодной статьи</h3>
        <?php else : ?>
            <?php foreach ($list as $val) : ?>
                <?php if ($val['category_id']== 2) :?>
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
                <?endif;?>
            <?php endforeach ?>
            <div class="pagination justify-content-center"><?php echo $pagination; ?></div>
        <?php endif ?>
    </div>


</section>
