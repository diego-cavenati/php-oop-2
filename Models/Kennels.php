<?php

require_once __DIR__ . '/../Traits/Sizable.php';
require_once __DIR__ . '/../Traits/Weightable.php';


class Kennel extends Product
{
    use Sizable;
    use Weightable;
}
