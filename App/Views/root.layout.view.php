<!DOCTYPE html>
<!--suppress ALL -->
<html lang="en">
<head>
    <title>Naše lesy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="public/gallery.css">
    <link rel="stylesheet" href="public/pozadie.css">
</head>
<body>
<div class="nadpis">
    Naše lesy
</div>

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
            <a class="btn btn-outline-success btnstyle" href="?c=prispevky">Úvodná stránka</a>
            <a class="btn btn-outline-success btnstyle" href="?c=galeria">Galéria</a>
            <a class="btn btn-outline-success btnstyle" href="#">Nížiny</a>
            <a class="btn btn-outline-success btnstyle" href="#">Pohoria</a>
        </form>
        <div class="loginMargin">
            <a class="btn btn-outline-success navbarmenu" href="?c=prihlasenie">Login</a>
            <a class="btn btn-outline-success navbarmenu" href="?c=registracia">Register</a>
        </div>
    </div>
</nav>

    <?= $contentHTML ?>

</body>
</html>
