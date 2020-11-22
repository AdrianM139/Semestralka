<?php /** @var Array $data */
?>

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
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a>
                <a class="btn btn-primary" href="?c=blog&a=uprav&id=<?=$article->getId() ?>" role="button">Upraviť</a>
                <a class="btn btn-danger" href="?c=blog&zmaz=true&id=<?=$article->getId() ?>" role="button">Zmazať</a></p>
            </div>

        <?php } ?>
        </div>
    </div>


