<?php


namespace App\Controllers;


use App\Core\Responses\Response;
use App\Core\AControllerBase;
use App\Models\Setting;
use App\Models\User;

class RegistraciaController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        $formData = $this->app->getRequest()->getPost();
        $user = new User();
        $setting = new Setting();
        $data = [];
        if(isset($formData['submit'])) {
            if (count(User::getAll('login = ?',[$formData['login']])) > 0) {
                $data = ['message' => 'login sa už používa'];
            } else if (strlen($formData['login']) < 3 || strlen($formData['login']) > 15) {
                $data = ['message' => 'Login musí mať 3 až 15 znakov'];
            } else if (strlen($formData['heslo']) < 3 || strlen($formData['heslo']) > 15) {
                $data = ['message' => 'Heslo musí mať 3 až 15 znakov'];
            } else if ($formData['heslo'] != $formData['hesloOpak']) {
                $data = ['message' => 'Heslá sa nezhodujú'];
            } else if (count(User::getAll('email = ?',[$formData['email']])) > 0) {
                $data = ['message' => 'Email sa už používa'];
            } else {
                $heslo = password_hash($formData['heslo'], PASSWORD_DEFAULT);
                $user->setLogin($formData['login']);
                $user->setHeslo($heslo);
                $user->setEmail($formData['email']);
                $user->setRola('pouzivatel');
                $user->save();
                $userId = User::getAll('login = ?',[$formData['login']])[0];
                $setting->setIdUser($userId->getId());
                $setting->setFarba('#c8ff00cc');
                $setting->setFarbaZobraz('#159c00cc');
                $setting->setPozadie('url("../img/Lesy/les2.jpg")');
                $setting->setHlavicka('url("../img/Lesy/zelen.png")');
                $setting->save();
                header("Location: ?c=prihlasenie");
                return $this->redirect('?c=prihlasenie&a=index');
            }
        }
        if ($this->app->getAuth()->isLogged()) {
            $data['settings'] = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];
        }
        return $this->html($data, 'register');
    }
}




