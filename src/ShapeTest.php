<?php

require __DIR__ . "/Shape.php";

use PHPUnit\Framework\TestCase;
use PHPUnitColors\Display;

final class ShapeTest extends TestCase
{
    public function testClassConstructor()
    {
        $shape = new Shape("square", 1);
        $this->assertSame("square", $shape->getShapeType(), Display::OK('Ok'));
    }

    public function testGetShapeArea()
    {
        $square = new Shape("square", 11);
        $squareArea = $square->getShapeArea();
        $this->assertEquals(121, $squareArea);

        $circle = new Shape("circle", 10);
        $circleArea = $circle->getShapeArea();
        $this->assertEquals(314.1592653589793, $circleArea);
    }

    public function testGetShapeOutline()
    {
        $sq = new Shape("square", 2);
        $this->assertEquals(8, $sq->getShapeOutline());
    }

}