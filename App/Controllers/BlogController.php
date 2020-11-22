<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\FileStorage;
class BlogController extends AControllerBase
{

    public function index()
    {
        if (isset($_GET['zmaz'])) {
            $id = $_GET['id'];
            $article = Article::getOne($id);
            $article->delete();
            header("Location: ?c=blog");
        }

        return [
            'articles' => Article::getAll()
        ];

    }

    public function uprav()
    {
        $id = $_GET['id'];
        $article = Article::getOne($id);

        if (isset($_POST['title'])) {
            $article->setTitle($_POST['title']);
            $article->setText($_POST['text']);
            $article->Save();
            header("Location: ?c=blog");
        }

        return[
            'articles' => $article
        ];
    }

    public function pridaj()
    {
        $article = new Article();
        $article->setText("nový text");
        $article->setTitle("nový názov");

        if (isset($_POST['title'])) {
            $article->setTitle($_POST['title']);
            $article->setText($_POST['text']);
            $article->Save();
            header("Location: ?c=blog");
        }

        return[
            'articles' => $article
        ];
    }


}