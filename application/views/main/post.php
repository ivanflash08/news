
    <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
    <section>

        <h4 class="center"><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h4>
<!--        <p>--><?php //echo htmlspecialchars($data['description'], ENT_QUOTES); ?><!--</p>-->
<!--        <br>-->
        <img class="center imgSize" src="/public/materials/<?php echo $data['id']; ?>.jpg" alt=""/>
        <div class="container">
            <pre width="60%"><?php echo $data['text']; ?></pre>
        </div>
        <hr>
        <p>Опубликовано : <?php echo htmlspecialchars($data['date'], ENT_QUOTES); ?></p>
    </section>
    <!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div>
                    </div>
                </div>
            </div>
    </footer>






