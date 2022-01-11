<?php
namespace App\Auth;

use App\Core\AAuthenticator;
use App\Models\User;

class DBAuthenticator extends AAuthenticator
{


    /**
     * DBAuthenticator constructor.
     */
    public function __construct()
    {
        session_start();
    }

    function login($userLogin, $pass)
    {
        $foundUser = User::getAll("login = ?",[$userLogin]);

        if(count($foundUser) == 1){
            $foundUser = $foundUser[0];
            if(password_verify($pass,$foundUser->getHeslo())){
                $_SESSION['user'] = $foundUser;
                $_SESSION['login'] = $foundUser->getLogin();
                $_SESSION['rola'] = $foundUser->getRola();
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    function getLoggedUser(): \App\Models\User
    {
        return $_SESSION['user'];
    }

    function isLogged()
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }

    function logout()
    {
        // TODO: Implement logout() method.
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
        }
    }


}