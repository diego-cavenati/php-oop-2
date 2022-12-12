<?php

trait Sizable
{
    protected $size;

    public function set_size($size, $unit)
    {
        $this->size = $size . $unit;
    }

    public function get_size()
    {
        return $this->size;
    }
}
