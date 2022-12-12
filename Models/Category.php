<?php

class Category
{
    public $category;
    public function __construct(String $category)
    {
        $this->category = $category;
    }

    public function get_category()
    {
        return $this->category;
    }
}
