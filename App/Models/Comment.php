<?php

namespace App\Models;
use App\Core\Model;

class Comment extends Model
{
    protected $id;
    protected ?string $userLogin;
    protected ?string $text;

    /**
     * Article constructor.
     * @param $userLogin
     * @param $text
     */
    public function __construct(?string $userLogin = null, ?string $text = null)
    {
        $this->userLogin = $userLogin;
        $this->text = $text;
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

    static public function setDbColumns()
    {
        return ['id', 'userLogin', 'text'];
    }

    static public function setTableName()
    {
        return 'comments';
    }
}