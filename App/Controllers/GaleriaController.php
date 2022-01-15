<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Setting;

class GaleriaController extends AControllerBase
{
    public function index()
    {
        return $this->html([
            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
        ]);
    }
}