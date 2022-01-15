<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Comment;
use App\Models\Setting;

class KomentareController extends AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        $comment = new Comment();
        if (isset($_POST['submit'])) {
            $comment->setUserLogin($_SESSION['login']);
            $comment->setText($_POST['text']);
            $comment->Save();
            header("Location: ?c=komentare");
        }
        if (isset($_GET['zmaz'])) {
            $id = $_GET['id'];
            $comment = Comment::getOne($id);
            $comment->delete();
            header("Location: ?c=komentare");
        }
        return $this->html([
            'settings' => $this->app->getAuth()->isLogged() ? Setting::getAll('id_user = ?',[$this->app->getAuth()->getLoggedUser()->getId()])[0] : null,
            'comments' => Comment::getAll()]);
    }
}



