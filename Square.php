<?php
include_once "Shapes.php";

class Square extends Shapes
{
    public function __construct($length)
    {
        parent::__construct($length);
    }

    public function perimeter()
    {
        return 4 * $this->length;
    }
}