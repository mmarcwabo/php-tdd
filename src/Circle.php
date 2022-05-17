<?php
class Circle extends Shape {
    private $radius;

    public function getRadius()
    {
        return $this->radius;
    }

    public function getSquareArea()
    {
        $squareArea = M_PI * ($this->radius ^ 2);
        return $squareArea;
    }
}