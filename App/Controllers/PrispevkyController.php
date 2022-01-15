<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\Setting;

class PrispevkyController extends AControllerBase
{

    public function index()
    {
        if (isset($_GET['zmaz'])) {
            $id = $_GET['id'];
            $article = Article::getOne($id);
            $article->delete();
            header("Location: ?c=prispevky");
        }

        return $this->html([
            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
            'articles' => Article::getAll(),
            'prihlaseny' => $this->app->getAuth()->isLogged()
        ]);

    }

    public function uprav()
    {
        $id = $_GET['id'];
        $article = Article::getOne($id);

        if (isset($_POST['title'])) {
            $article->setTitle($_POST['title']);
            $article->setText($_POST['text']);
            $article->Save();
            header("Location: ?c=prispevky");
        }

        return $this->html([
            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
            'articles' => $article
            ]);
    }

    public function pridaj()
    {
        $article = new Article();
        if (isset($_POST['title']) && isset($_POST['text'])) {
            $str = $_POST['title'];
            if (strlen(trim($str)) <= 1) { $str = "Názov"; }
            $article->setTitle($str);
            $article->setText($_POST['text']);
            $article->Save();
            header("Location: ?c=prispevky");
        }

        return $this->html([

            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
            'articles' => $article]);
    }


}