<?php

namespace App\Models;
use App\Core\Model;

class Article extends Model
{
    //musia byť protected
    protected $id;
    protected ?string $title;
    protected ?string $text;

    /**
     * Article constructor.
     * @param $title
     * @param $text
     */
    public function __construct(?string $title = null, ?string $text = null)
    {
        $this->title = $title;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
        return ['id', 'title', 'text'];
    }

    static public function setTableName()
    {
        return 'articles';
    }
}