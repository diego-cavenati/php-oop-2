<?php

require_once __DIR__ . '/../Traits/Sizable.php';
require_once __DIR__ . '/../Traits/Weightable.php';
// require_once __DIR__ . '/Product.php';
// require_once __DIR__ . '/Category.php';


class Game extends Product
{
    use Sizable;
    use Weightable;

    public function __construct($category, $brand, $name, $description, $price, String $material)
    {
        $this->material = $material;
        parent::__construct($brand, $name, $description, $price, $category);
    }
}
