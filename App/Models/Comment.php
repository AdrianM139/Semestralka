<?php

namespace App\Models;
use App\Core\Model;

class Comment extends Model
{
    protected $id;
    protected ?string $userLogin;
    protected ?string $text;
    protected ?string $id_prispevok;

    /**
     * Article constructor.
     * @param $userLogin
     * @param $text
     * @param $id_prispevok
     */
    public function __construct(?string $userLogin = null, ?string $text = null, ?string $id_prispevok = null)
    {
        $this->userLogin = $userLogin;
        $this->text = $text;
        $this->id_prispevok = $id_prispevok;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param mixed $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getIdPrispevok()
    {
        return $this->id_prispevok;
    }

    /**
     * @param mixed $id_prispevok
     */
    public function setIdPrispevok($id_prispevok)
    {
        $this->id_prispevok = $id_prispevok;
    }

    static public function setDbColumns()
    {
        return ['id', 'userLogin', 'text', 'id_prispevok'];
    }

    static public function setTableName()
    {
        return 'comments';
    }
}