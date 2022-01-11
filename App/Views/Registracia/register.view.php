<?php /** @var Array $data */
?>

<div class="main">
<main class="my-form form-margin">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8 loginWidth">
                <div class="card">
                    <div class="card-header">Registrácia</div>
                    <div class="card-body">
                        <div>
                            <center style="margin-bottom: 10px; color: red"><?= @$data['message'] ?></center>
                        </div>
                        <form name="my-form" method="post" action="?c=registracia">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Použivateľské meno</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="login" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Heslo</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="heslo" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Zopakujte heslo</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="hesloOpak" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mailová adresa</label>
                                <div class="col-md-6">
                                    <input type="email" id="email_address" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary button-zeleny">
                                    Registrovať
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
