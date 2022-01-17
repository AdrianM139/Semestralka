<?php /** @var Array $data */
?>
<div class="main">
    <main class="login-form form-margin">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8 loginWidth">
                    <div class="card">
                        <div class="card-header">Prihláste sa</div>
                        <div class="card-body" style="text-align: center">
                            <a id="err_login" class="text-center text-danger mb-3">
                            </a>
                            <form autocomplete="off" onsubmit="return false;">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Meno</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="login" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Heslo</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button name="submit" onclick="prihlasenie.odoslatUdaje()" class="btn btn-primary button-zeleny">
                                        Prihlásiť sa
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>