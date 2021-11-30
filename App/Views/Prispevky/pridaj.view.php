<?php
/** @var Array $data */
$article = $data['articles'];

?>
<div class="main">
<form method="post">
    <div class="form-group">
        <label>Názov príspevku</label>
        <input id="username" name="title" type="text" class="form-control" value="<?= $article->getTitle() ?>" required>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea id="text" name="text" class="form-control" rows="3" required><?= $article->getText() ?></textarea>
    </div>
    <input type="submit" value="Odoslať">
</form>
</div>