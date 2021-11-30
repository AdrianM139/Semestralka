<?php
/** @var Array $data */
$article = $data['articles'];

?><html>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bgstyle">
    <div class="nav-item dropdown">
        <a class="navbar-brand nav-link dropdown-toggle navbarmenu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
        </a>
        <div class="dropdown-menu dropdown-menu-color" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Lesy</a>
            <a class="dropdown-item" href="#">Rastliny</a>
            <a class="dropdown-item" href="#">Živočíchy</a>
            <a class="dropdown-item" href="#">Národné parky</a>
        </div>
    </div>
    <button class="navbar-toggler navbarcolors" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <form class="navbar-nav navbarcenter">
            <a class="btn btn-outline-success btnstyle" type="button" href="?c=prispevky">Úvodná stránka</a>
            <a class="btn btn-outline-success btnstyle" type="button" href="?c=galeria">Galéria</a>
            <a class="btn btn-outline-success btnstyle" type="button" href="#">Nížiny</a>
            <a class="btn btn-outline-success btnstyle" type="button" href="#">Pohoria</a>
        </form>
        <div class="loginMargin">
            <a class="btn btn-outline-success navbarmenu" type="button" href="?c=prihlasenie">Login</a>
            <a class="btn btn-outline-success navbarmenu" type="button" href="?c=registracia">Register</a>
        </div>
    </div>
</nav>
<div class="main">
<form method="post">
    <div class="form-group">
        <label for="title">Názov príspevku</label>
        <input id="username" name="title" type="text" class="form-control" value="<?= $article->getTitle() ?>" required>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea id="text" name="text" class="form-control" rows="3" required><?= $article->getText() ?></textarea>
    </div>
    <input type="submit" value="Odoslať">
</form>
</div>
</body>
</html>