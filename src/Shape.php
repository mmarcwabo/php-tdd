<?php

require __DIR__ . "/Square.php";
require __DIR__ . "/Circle.php";

class Shape {

    private $shapeType;
    private $shapeDimension;
    
    public function __construct($shapeType, $shapeDimension)
    {
        $this->shapeType = $shapeType;
        $this->shapeDimension = $shapeDimension;
    }
    
    public function getShapeType()
    {
        return $this->shapeType;
    }

    public function getShapeDimension()
    {
        return $this->shapeDimension;
    }

    public function getShapeArea()
    {
        $shapeArea = 0;
        switch ($this->shapeType) {
            case 'square':
                $square = new Square($this->getShapeDimension());
                $shapeArea = $square->getSquareArea();                
                break;
            
            case 'circle':
                $circle = new Circle($this->getShapeDimension());
                $shapeArea = $circle->getCircleArea();                
                break;
            
            default:
                echo "Shape type not supported yet";
                break;
        }
        return $shapeArea;
    }

    public function getShapeOutline()
    {
        $shapeOutline = 0;
        if ($this->getShapeType() == 'circle') {
            $shape = new Circle($this->getShapeDimension());
            $shapeOutline = $shape->getCircleOutline();
        } else if ($this->getShapeType() == 'square') {
            $shape = new Square($this->getShapeDimension());
            $shapeOutline = $shape->getSquareOutline();
        } else {
            $shapeOutline = -1;
        }
        return $shapeOutline;
    }

}