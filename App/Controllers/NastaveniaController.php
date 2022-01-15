<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Setting;

class NastaveniaController extends AControllerBase
{
    /**
     * @inheritDoc
     */
    public function index()
    {
        $setting = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];

        $formData = $this->app->getRequest()->getPost();
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
            $setting->setFarbaZobraz('#cece1fcc');
            $setting->setPozadie('url("../img/Lesy/zlty.jpg")');
            $setting->setHlavicka('url("../img/Lesy/zlten.jpg")');
            $setting->save();
        }

        $data = ['settings' => Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0]];
        return $this->html($data);
    }

    public function getFarby() {
        $setting = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()]);
        return $this->json($setting[0]);
    }
}