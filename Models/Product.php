<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Kennels.php';


class Product
{
    public function __construct($type, Category $category, String $brand, String $name, String $description, Int $price)
    {
        $this->type = $type;
        $this->category = $category;
        $this->brand = $brand;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
