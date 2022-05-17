<?php
class Square extends Shape {
    private $sideLength;

    public function getSideLength()
    {
        return $this->sideLength;
    }

    public function getSquareArea()
    {
        $squareArea = $this->sideLength ^ 2;
        return $squareArea;
    }
}