<?php

namespace App\Models;
use App\Core\Model;

class Comment extends Model
{
    protected $id;
    protected ?string $id_user;
    protected ?string $text;
    protected ?string $id_prispevok;

    /**
     * Article constructor.
     * @param $idUser
     * @param $text
     * @param $id_prispevok
     */
    public function __construct(?string $text = null, ?string $id_prispevok = null)
    {
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
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
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
        return ['id', 'id_user', 'text', 'id_prispevok'];
    }

    static public function setTableName()
    {
        return 'comments';
    }
}