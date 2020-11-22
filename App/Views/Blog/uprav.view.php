<?php
/** @var Array $data */
$article = $data['articles'];

?><html>
<body>

<form method="post">
    <div class="form-group">
        <label>Názov príspevku</label>
        <input name="title" type="text" class="form-control" value="<?= $article->getTitle() ?>">
    </div>
    <div class="form-group">
        <label>Text</label>
        <textarea name="text" class="form-control" rows="3"><?= $article->getText() ?></textarea>
    </div>
    <input type="submit" value="Odoslať">
</form>

</body>
</html>