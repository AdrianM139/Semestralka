<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
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

        return $this->html(['articles' => $article]);
    }


}