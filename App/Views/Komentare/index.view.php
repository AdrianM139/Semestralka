<?php
/** @var Array $data */
$comment = $data['comments'];
?>

<div class="main">
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
                <label for="text"></label>
                <label>
                    <input type="text" class="form-control" name="text" required>
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
                        <a style="color: red" href="?c=komentare&zmaz=true&id=<?=$comment->getId() ?>">Zmazať</a>
                    </div>
                <?php }} ?>
            </div>
        <?php } ?>
</div>