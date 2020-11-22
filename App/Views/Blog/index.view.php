<?php /** @var Array $data */
?>
<div class="slideShow">
    <img class="mySlides w3-animate-fading" src="img/lesy2.png" alt="">
    <img class="mySlides w3-animate-fading" src="img/nar.parky2.png" alt="">
    <img class="mySlides w3-animate-fading" src="img/z2.png" alt="">
    <img class="mySlides w3-animate-fading" src="img/r0.png" alt="">
</div>
<div>
    <a href="?c=blog&a=pridaj">Pridaj dačo</a>

</div>
    <div class="container">
        <div class="row">
        <?php /** @var \App\Models\Article $article */
        foreach ($data['articles'] as $article) {

        ?>
            <div class="col-md-4">
                <h2><?=$article->getTitle() ?></h2>
                <p><?=$article->getText() ?></p>
                <a class="btn btn-primary" href="?c=blog&a=uprav&id=<?=$article->getId() ?>" role="button">Upraviť</a>
                <a class="btn btn-danger" href="?c=blog&zmaz=true&id=<?=$article->getId() ?>" role="button">Zmazať</a></p>
            </div>

        <?php } ?>
        </div>
    </div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 8000);
    }
</script>

