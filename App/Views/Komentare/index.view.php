<?php
/** @var Array $data */
//$comment = $data['comments'];
$article = $data['article'];
?>

<div class="main">
    <h1>
        Príspevok:
    </h1>
    <div class="prispevok">
        <h2><?=$article->getTitle() ?></h2>
        <p style="margin-bottom: 3rem"><?=$article->getText() ?></p>
    </div>
    <br>
    <h1>
        Komentáre:
    </h1>
    <?php
    if(isset($_SESSION['user']) && $_SESSION['user'] != null){?>
        <form method="post">
            <label>
                <input class="btn btn-success" type="submit" name="submit" value="Pridať koment">
            </label>
            <div class="form-group">
                <label for="text">
                    <input type="text" class="form-control" name="text" required>
                    <input type="text" class="form-control" name="idPrispevok" value="<?=$article->getId() ?>" style="display: none">
                </label>
            </div>
        </form>
    <?php }?>
        <?php
        foreach ($data['comments'] as $comment) {
            ?>
            <div class="komenty">
                <b><?=$comment->getUserLogin() ?>:</b>  <?=$comment->getText() ?>
                <?php
                if(isset($_SESSION['user']) && $_SESSION['user'] != null){
                    if ($comment->getUserLogin() == $_SESSION['login'] || $_SESSION['rola'] == 'admin'){?>
                    <div>
                        <a style="color: red" href="?c=komentare&zmaz=true&idZmaz=<?=$comment->getId() ?>&idPrispevok=<?=$article->getId() ?>">Zmazať</a>
                    </div>
                <?php }} ?>
            </div>
        <?php } ?>
</div>