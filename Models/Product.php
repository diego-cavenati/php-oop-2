<?php

class Product
{
    public function __construct(String $brand, String $name, String $description, Int $price)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
