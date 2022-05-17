<?php

require __DIR__ . "/Shape.php";;

use PHPUnit\Framework\TestCase;

final class ShapeTest extends TestCase
{
    public function testClassConstructor()
    {
        $shape = new Shape("square");

        $this->assertSame('square', $shape->getShapeType());
    }

}