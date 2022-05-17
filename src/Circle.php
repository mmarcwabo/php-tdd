<?php
class Circle extends Shape {

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getCircleArea()
    {
        return pi() * pow($this->getRadius(), 2);        
    }

    public function getCircleOutline()
    {
        return pi() * $this->getRadius() * 2;
    }
}