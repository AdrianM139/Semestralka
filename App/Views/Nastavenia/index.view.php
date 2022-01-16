
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
            <a>Zadaj nové meno:</a>
            <label for="text">
                <input type="text" class="form-control" name="newLogin">
            </label>
            <br>
            <a>Zadaj nové heslo:</a>
            <label for="text">
                <input type="text" class="form-control" name="newPass">
            </label>
            <br>
            <a>Zopakuj nové heslo:</a>
            <label for="text">
                <input type="text" class="form-control" name="newPassRep">
            </label>
            <br>
            <a>Zadaj nový email:</a>
            <label for="text">
                <input type="text" class="form-control" name="newEmail">
            </label>
            <br>
            <label>
                <input type="submit" name="submit" value="Zmeniť">
            </label>
        </div>
    </form>
</div>
