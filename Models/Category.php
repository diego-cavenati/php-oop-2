<?php

class Category
{
    public $category;
    public $icon;

    public function __construct(String $category)
    {
        $this->category = $category;
    }

    public function get_category()
    {
        return $this->category;

        if ($this->category == 'dog') {
            $this->icon = '<i class="fa-thin fa-dog icon"></i>';
        } else if ($this->category == 'cat') {
            $this->icon = '<i class="fa-thin fa-cat icon"></i>';
        } else {
            throw new Exception('Il prodotto non è ne per cani ne per 
            gatti!');
        }

        throw new Exception($this->icon);
    }
}
