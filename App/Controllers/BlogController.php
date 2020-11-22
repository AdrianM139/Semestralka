<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
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