<html>
    <head>
        <title>Naše lesy</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="public/pozadie.css">
    </head>
    <body>
        <div class="nadpis">
            Naše lesy
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="navbar-nav">
                    <button class="btn btn-outline-success" type="button">Úvodná stránka</button>
                    <button class="btn btn-outline-success" type="button">Galéria</button>
                    <button class="btn btn-outline-success" type="button">Mapa Slovenska</button>
                    <button class="btn btn-outline-success" type="button">Nížiny</button>
                    <button class="btn btn-outline-success" type="button">Pohoria</button>
                </form>
            </div>
        </nav>


    <div class="main">
    <body >
        <?= $contentHTML ?>

    </body>
    </div>
</html>
