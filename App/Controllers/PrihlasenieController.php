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
        return $this->html(null, 'login');
    }

    public function login() {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;

        if (isset($formData['name']) && isset($formData['password'])) {
            $logged = $this->app->getAuth()->login($formData['name'], $formData['password']);
            $_SESSION['name'] = $formData['name'];
            $_SESSION['password'] = $formData['password'];
            if ($logged) {
                $data = ['err' => ''];
            } else {
                $data = ['err' => 'Nesprávne meno alebo heslo'];
            }
        } else {
            $data = ['err' => 'Meno alebo heslo nebolo zadané'];
        }

        return $this->json($data);
    }

    public function logout() {
        $this->app->getAuth()->logout();
        return $this->html(null, 'logout');
    }
}