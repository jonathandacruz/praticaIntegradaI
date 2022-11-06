<?php

class Item
{
    private $id;
    private $name;
    private $category;
    private $price;
    private $img_url;
    private $unit;

    public function __construct($name, $category, $price, $img_url, $unit)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->img_url = $img_url;
        $this->unit = $unit;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getImgUrl()
    {
        return $this->img_url;
    }

    public function setImgUrl($img_url): void
    {
        $this->img_url = $img_url;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit): void
    {
        $this->unit = $unit;
    }

}
