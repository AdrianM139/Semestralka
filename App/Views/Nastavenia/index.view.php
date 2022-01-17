<?php /** @var Array $data */
?>
<div class="main">
    <h1>
        Nastavenia:
    </h1>
    <br>
    <h4>
        Zmeniť farbu:
    </h4>
    <div class="row">
        <div class="colorDiv">
            <a>Zeléna</a>
            <a class="colorChange" style="background-color: greenyellow; border-color: green" href="?c=nastavenia&zelena=true"></a>
        </div>
        <div class="colorDiv">
            <a>Modrá</a>
            <a class="colorChange" style="background-color: deepskyblue; border-color: darkblue" href="?c=nastavenia&modra=true"></a>
        </div>
        <div class="colorDiv">
            <a>Fialová</a>
            <a class="colorChange" style="background-color: purple; border-color: rebeccapurple" href="?c=nastavenia&fialova=true"></a>
        </div>
        <div class="colorDiv">
            <a>Červená</a>
            <a class="colorChange" style="background-color: red; border-color: darkred" href="?c=nastavenia&cervena=true"></a>
        </div>
        <div class="colorDiv">
            <a>Žltá</a>
            <a class="colorChange" style="background-color: yellow; border-color: orange" href="?c=nastavenia&zlta=true"></a>
        </div>
    </div>
    <br>
    <br>
    <h4>
        Zmeniť osobné údaje:
    </h4>
    <form method="post">
        <div class="form-group">
            <div style="margin-bottom: 10px; color: red"><?= @$data['messageLogin'] ?></div>
            <a>Zadaj nové meno:</a>
            <label>
                <input type="text" class="form-control" name="newLogin">
            </label>
            <br>
            <div style="margin-bottom: 10px; color: red"><?= @$data['messagePass'] ?></div>
            <a>Zadaj nové heslo:</a>
            <label>
                <input type="password" class="form-control" name="newPass">
            </label>
            <br>
            <a>Zopakuj nové heslo:</a>
            <label>
                <input type="password" class="form-control" name="newPassRep">
            </label>
            <br>
            <div style="margin-bottom: 10px; color: red"><?= @$data['messageEmail'] ?></div>
            <a>Zadaj nový email:</a>
            <label>
                <input type="email" class="form-control" name="newEmail">
            </label>
            <br>
            <label>
                <input type="submit" name="submit" value="Zmeniť">
            </label>
        </div>
    </form>
</div>
