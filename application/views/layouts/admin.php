<body class="fixed-nav sticky-footer bg-dark">
<?php if ($this->route['action'] != 'login'): ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/admin/posts">Панель Администратора</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/add">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-text">Добавить пост</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/posts">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Посты</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">
                        <i class="fa fa-fw fa-sign-out"></i>
                        <span class="nav-link-text">Выход</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
<?php echo $content; ?>
<?php if ($this->route['action'] != 'login'): ?>
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
            </div>
        </div>
    </footer>
<?php endif; ?>
</body>

