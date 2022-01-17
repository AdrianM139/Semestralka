<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\User;

class NastaveniaController extends AControllerBase
{
    /**
     * @inheritDoc
     */
    public function index()
    {
        $setting = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];

        $data = [];
        if(isset($_GET['zelena'])){
            $setting->setFarba('#c8ff00cc');
            $setting->setFarbaZobraz('#159c00cc');
            $setting->setPozadie('url("../img/Lesy/les2.jpg")');
            $setting->setHlavicka('url("../img/Lesy/zelen.png")');
            $setting->save();
        } else if(isset($_GET['modra'])) {
            $setting->setFarba('#00dcffcc');
            $setting->setFarbaZobraz('#057071cc');
            $setting->setPozadie('url("../img/Lesy/modry.jpg")');
            $setting->setHlavicka('url("../img/Lesy/modren.jpg")');
            $setting->save();
        } else if(isset($_GET['fialova'])) {
            $setting->setFarba('#bf48ffcc');
            $setting->setFarbaZobraz('#5f0192cc');
            $setting->setPozadie('url("../img/Lesy/fialovy.jpg")');
            $setting->setHlavicka('url("../img/Lesy/fialoven.jpg")');
            $setting->save();
        } else if(isset($_GET['cervena'])) {
            $setting->setFarba('#ff2d00cc');
            $setting->setFarbaZobraz('#9b0000cc');
            $setting->setPozadie('url("../img/Lesy/cerveny.jpg")');
            $setting->setHlavicka('url("../img/Lesy/cerven.jpg")');
            $setting->save();
        } else if(isset($_GET['zlta'])) {
            $setting->setFarba('#f3ff00cc');
            $setting->setFarbaZobraz('#99a000cc');
            $setting->setPozadie('url("../img/Lesy/zlty.jpg")');
            $setting->setHlavicka('url("../img/Lesy/zlten.jpg")');
            $setting->save();
        }
        if (isset($_POST['submit'])) {
            $user = User::getAll('id = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];
            $comments = Comment::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()]);
            if ($_POST['newLogin'] == $user->getLogin()){
                $data['messageLogin'] = 'Toto je tvoj aktuálny login, zadaj iný';
            } else if (count(User::getAll('login = ?',[$_POST['newLogin']])) > 0){
                $data['messageLogin'] = 'Tento login sa už používa';
            } else if ($_POST['newLogin'] != null && strlen($_POST['newLogin']) < 3 || strlen($_POST['newLogin']) > 15) {
                $data = ['messageLogin' => 'Login musí mať 3 až 15 znakov'];
            } else if ($_POST['newLogin'] != null) {
                $user->setLogin($_POST['newLogin']);
                $user->save();
                $_SESSION['login'] = $user->getLogin();
                foreach ($comments as $comment) {
                    $comment->setIdUser($_SESSION['id']);
                    $comment->save();
                }
            }
            if ($_POST['newPass'] != null && strlen($_POST['newPass']) < 3 || strlen($_POST['newPass']) > 15) {
                $data = ['messagePass' => 'Heslo musí mať aspoň 3 až 15 znakov'];
            } else if ($_POST['newPassRep'] != null && strlen($_POST['newPassRep']) < 3 || strlen($_POST['newPassRep']) > 15) {
                $data = ['messagePass' => 'Heslo musí mať aspoň 3 až 15 znakov'];
            } else if ($_POST['newPass'] != $_POST['newPassRep']) {
                $data['messagePass'] = 'Heslá sa nezhodujú';
            } else if ($_POST['newPass'] != null && $_POST['newPassRep'] != null && $_POST['newPass'] == $_POST['newPassRep']) {
                $newPass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
                $user->setHeslo($newPass);
                $user->save();
            }
            if (count(User::getAll('email = ?',[$_POST['newEmail']])) > 0){
                $data['messageEmail'] = 'Tento email sa už používa';
            } else if ($_POST['newEmail'] != null) {
                $user->setEmail($_POST['newEmail']);
                $user->save();
            }
        }

        $data['settings'] = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];
        return $this->html($data);
    }

    public function getFarby() {
        if (!$this->app->getAuth()->isLogged()) {
            $data = ['err' => 'Používateľ nie je prihlásený'];
            return $this->json($data);
        }
        $setting = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()]);
        return $this->json($setting[0]);
    }

    public function authorize($action){
        return $this->app->getAuth()->isLogged();
    }
}