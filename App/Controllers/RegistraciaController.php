<?php


namespace App\Controllers;


use App\Core\Responses\Response;
use App\Core\AControllerBase;
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
        $data = '';
        if(isset($formData['submit'])) {
            if (count(User::getAll('login = ?',[$formData['login']])) > 0) {
                $data = ['message' => 'login sa už používa'];
            } else if ($formData['heslo'] != $formData['hesloOpak']) {
                $data = ['message' => 'Heslá sa nezhodujú'];
            } else if (count(User::getAll('email = ?',[$formData['email']])) > 0) {
                $data = ['message' => 'Email sa už používa'];
            } else {
                $heslo = password_hash($formData['heslo'], PASSWORD_DEFAULT);
                $user->setLogin($formData['login']);
                $user->setHeslo($heslo);
                $user->setEmail($formData['email']);
                $user->setRola();
                $user->save();
                header("Location: ?c=prihlasenie");
                return $this->redirect('?c=prihlasenie&a=index');
            }
        }
        return $this->html($data, 'register');
    }
}




