<?php


namespace App\Models;


use App\Core\Model;

class Setting extends Model
{
    protected $id;
    protected ?string $id_user;
    protected ?string $farba;
    protected ?string $farbaZobraz;
    protected ?string $pozadie;
    protected ?string $hlavicka;

    /**
     * Nastavenie constructor.
     * @param $id
     * @param string|null $id_user
     * @param string|null $farba
     * @param string|null $farbaZobraz
     * @param string|null $pozadie
     * @param string|null $hlavicka
     */
    public function __construct(?string $id_user = null, ?string $farba = null, ?string $farbaZobraz = null, ?string $pozadie = null, ?string $hlavicka = null)
    {
        $this->id_user = $id_user;
        $this->farba = $farba;
        $this->farbaZobraz = $farbaZobraz;
        $this->pozadie = $pozadie;
        $this->hlavicka = $hlavicka;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getIdUser(): ?string
    {
        return $this->id_user;
    }

    /**
     * @param string|null $id_user
     */
    public function setIdUser(?string $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return string|null
     */
    public function getFarba(): ?string
    {
        return $this->farba;
    }

    /**
     * @param string|null $farba
     */
    public function setFarba(?string $farba): void
    {
        $this->farba = $farba;
    }

    /**
     * @return string|null
     */
    public function getFarbaZobraz(): ?string
    {
        return $this->farbaZobraz;
    }

    /**
     * @param string|null $farbaZobraz
     */
    public function setFarbaZobraz(?string $farbaZobraz): void
    {
        $this->farbaZobraz = $farbaZobraz;
    }

    /**
     * @return string|null
     */
    public function getPozadie(): ?string
    {
        return $this->pozadie;
    }

    /**
     * @param string|null $farba
     */
    public function setPozadie(?string $pozadie): void
    {
        $this->pozadie = $pozadie;
    }

    /**
     * @return string|null
     */
    public function getHlavicka(): ?string
    {
        return $this->hlavicka;
    }

    /**
     * @param string|null $farba
     */
    public function setHlavicka(?string $hlavicka): void
    {
        $this->hlavicka = $hlavicka;
    }

    static public function setDbColumns()
    {
        return ['id','id_user','farba','farbaZobraz','pozadie','hlavicka'];
    }

    static public function setTableName()
    {
        return 'settings';
    }
}