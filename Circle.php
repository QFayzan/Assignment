<?php
include_once 'Shapes.php';


class Circle extends Shapes
{
    public function __construct( $radius)
    {
        parent::__construct(null,null,$radius);
    }
    public function perimeter()
    {
        return 2*$this->radius*pi();
    }
}