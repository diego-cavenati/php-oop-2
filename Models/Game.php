<?php

require_once __DIR__ . '/../Traits/Sizable.php';
require_once __DIR__ . '/../Traits/Weightable.php';
require_once __DIR__ . '/Product.php';


class Game extends Product
{
    use Sizable;
    use Weightable;

    public function __construct(String $material)
    {
        $this->material = $material;
    }
}
