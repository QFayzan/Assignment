<?php
include_once "Shapes.php";

class Rectangle extends Shapes
{
 public function __construct($length, $width)
 {
     parent::__construct($length, $width);
 }
 public function perimeter()
 {
     return 2*($this->length+$this->width);
 }
}