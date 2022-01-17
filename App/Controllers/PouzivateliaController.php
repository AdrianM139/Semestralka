<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\User;

class PouzivateliaController extends AControllerBase
{
    /**
     * @inheritDoc
     */
    public function index()
    {
        if (isset($_GET['zmaz'])) {
            $id = $_GET['id'];
            $user = User::getOne($id);
            $comments = Comment::getAll('id_user = ?',[$id]);
            foreach ($comments as $comment) {
                $comment->delete();
            }
            $setting = Setting::getAll('id_user = ?',[$id])[0];
            $setting->delete();
            $user->delete();
            header("Location: ?c=pouzivatelia");
        }
        if (isset($_GET['zmen'])) {
            $id = $_GET['id'];
            $user = User::getOne($id);
            if ($user->getRola() == 'admin') {
                $user->setRola('pouzivatel');
            } else {
                $user->setRola('admin');
            }
            $user->save();
            header("Location: ?c=pouzivatelia");
        }

        $data = [];
        if ($this->app->getAuth()->isLogged()) {
            $data['settings'] = Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0];
        }
        $data['users'] = User::getAll();
        return $this->html($data);
    }

    public function authorize($action){
        return $_SESSION['rola'] == 'admin';
    }
}