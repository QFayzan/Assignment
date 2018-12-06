<?php

class Shapes
{
    protected $length;
    protected $width;
    protected $radius;

    public function __construct($length = null, $width = null, $radius = null)
    {
        if ($length != null)
            $this->length = $length;
        if ($width != null)
            $this->width = $width;
        if ($radius != null)
            $this->radius = $radius;
    }
}
