<?php


namespace App\Controllers;


use App\Core\Responses\Response;
use App\Core\AControllerBase;
use App\Models\Setting;

class PrihlasenieController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        return $this->redirect('?c=prihlasenie&a=login');
    }

    public function login() {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;
        if (isset($formData['submit'])) {
            $logged = $this->app->getAuth()->login($formData['login'], $formData['password']);
            if ($logged) {
                return $this->redirect('?c=prispevky');
            }
        }
        $data = ($logged === false ? ['message' => 'Zly login alebo heslo!'] : []);
        if ($this->app->getAuth()->isLogged()) {
            $data['settings'] = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];
        }
        return $this->html($data, 'login');
    }

    public function logout() {
        $this->app->getAuth()->logout();
        return $this->html(null, 'logout');
    }
}