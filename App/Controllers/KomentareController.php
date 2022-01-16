<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Setting;

class KomentareController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        $id = '';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else if (isset($_POST['idPrispevok'])) {
            $id = $_POST['idPrispevok'];
        } else if (isset($_GET['idPrispevok'])) {
            $id = $_GET['idPrispevok'];
        }
        $comment = new Comment();
        if (isset($_POST['submit'])) {
            $comment->setUserLogin($_SESSION['login']);
            $comment->setText($_POST['text']);
            $comment->setIdPrispevok($id);
            $comment->Save();
            header("Location: ?c=komentare&id=".$id);
        }
        if (isset($_GET['zmaz'])) {
            $idZmaz = $_GET['idZmaz'];
            $comment = Comment::getOne($idZmaz);
            $comment->delete();
            header("Location: ?c=komentare&id=".$id);
        }
        return $this->html([
            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
            'comments' => Comment::getAll('id_prispevok = ?',[$id]),
            'article' => Article::getOne($id)]);
    }
}



