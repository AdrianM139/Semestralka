<?php /** @var Array $data */
?>
<div class="main">
    <main class="login-form form-margin">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8 loginWidth">
                    <div class="card">
                        <div class="card-header">Prihláste sa</div>
                        <div class="card-body">
                            <div>
                                <center style="margin-bottom: 10px; color: red"><?= @$data['message'] ?></center>
                            </div>
                            <form autocomplete="off" method="post" action="?c=prihlasenie&a=login">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Meno</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="login" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Heslo</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Zapamätať
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary button-zeleny">
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
