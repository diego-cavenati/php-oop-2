<?php

require_once __DIR__ . '/../Traits/Weightable.php';

class Food extends Product
{
    use Weightable;
    public $Ingredient;

    public function __construct(String $ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
