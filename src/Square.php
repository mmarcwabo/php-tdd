<?php
class Square extends Shape {
    private $sideLength;

    public function __construct($sideLength)
    {
        $this->sideLength = $sideLength;
    }

    public function getSideLength()
    {
        return $this->sideLength;
    }

    public function getSquareArea()
    {
        $squareArea = pow($this->sideLength, 2);
        return $squareArea;
    }
}