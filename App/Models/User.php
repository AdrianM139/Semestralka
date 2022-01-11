<?php


namespace App\Models;

use App\Core\Model;
class User extends Model
{
    protected $id;
    protected $login;
    protected $heslo;
    protected $email;
    protected $rola;

    public function __construct(?string $login = null, ?string $heslo = null, ?string $email = null)
    {
        $this->login = $login;
        $this->heslo = $heslo;
        $this->email = $email;
    }

    /**
     * @param mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getHeslo()
    {
        return $this->heslo;
    }

    /**
     * @param mixed $heslo
     */
    public function setHeslo($heslo): void
    {
        $this->heslo = $heslo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->login;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRola()
    {
        return $this->rola;
    }

    /**
     * @param mixed $rola
     */
    public function setRola(): void
    {
        $this->rola = 'pouzivatel';
    }

    static public function setDbColumns()
    {
        return ['id','login', 'heslo', 'email', 'rola'];
    }

    static public function setTableName()
    {
        return 'users';
    }
}