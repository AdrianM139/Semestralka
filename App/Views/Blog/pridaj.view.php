<?php
/** @var Array $data */
$article = $data['articles'];

?><html>
<body>

<form method="post">
    <input type="text" name="title" value="<?= $article->getTitle() ?>">
    <input type="text" name="text" value="<?= $article->getText() ?>">
    <input type="submit" value="Odoslať">
</form>

</body>
</html>