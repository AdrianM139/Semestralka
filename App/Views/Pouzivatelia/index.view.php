<?php
/** @var Array $data */
$user = $data['users'];
?>

<div class="main">
    <h1>
        Použivatelia:
    </h1>
    <?php
    foreach ($data['users'] as $user) {
        ?>
        <div class="komenty">
            <b>Login:</b> <?=$user->getLogin() ?> &emsp;&emsp; <b>Email:</b> <?=$user->getEmail() ?> &emsp;&emsp; <b>Rola:</b> <?=$user->getRola() ?>
            <div>
                <?php
                if ($_SESSION['user'] != $user){ ?>
                    <a style="color: red" href="?c=pouzivatelia&zmaz=true&id=<?=$user->getId() ?>">Zmazať</a>
                    <a href="?c=pouzivatelia&zmen=true&id=<?=$user->getId() ?>">Zmeň rolu</a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>
