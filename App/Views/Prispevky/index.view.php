<?php /** @var Array $data */
?>

<div class="main">
<div class="slideShow">
    <img class="mySlides w3-animate-fading homepage-slides" src="img/Lesy/lesy2.png" alt="">
    <img class="mySlides w3-animate-fading homepage-slides" src="img/Parky/nar.parky2.png" alt="">
    <img class="mySlides w3-animate-fading homepage-slides" src="img/Zivocichy/z2.png" alt="">
    <img class="mySlides w3-animate-fading homepage-slides" src="img/Rastliny/r0.png" alt="">
</div>
<h1>
    Príspevky:
</h1>
<div>
    <a class="btn btn-success" href="?c=prispevky&a=pridaj">Pridaj príspevok</a>
</div>
        <div class="row">
        <?php /** @var \App\Models\Article $article */
        foreach ($data['articles'] as $article) {

        ?>
            <div class="col-md-4 prispevky">
                <h2><?=$article->getTitle() ?></h2>
                <p style="margin-bottom: 3rem"><?=$article->getText() ?></p>

                <a class="btn btn-outline-primary" href="?c=prispevky&a=uprav&id=<?=$article->getId() ?>">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                    </svg>
                </a>
                <a class="btn btn-outline-danger" href="?c=prispevky&zmaz=true&id=<?=$article->getId() ?>">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"></path>
                    </svg>
                </a>
            </div>

        <?php } ?>
        </div>
</div>
<script>
    let myIndex = 0;
    carousel();

    function carousel() {
        let i;
        let x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 8000);
    }
</script>

