<?php

class Shape {

    private $shapeType;
    
    public function __construct($shapeType)
    {
        $this->shapeType = $shapeType;
    }

    public function getShapeArea()
    {
        switch ($this->shapeType) {
            case 'square':
                
                break;
            
            case 'circle':
                
                break;
            
            default:
                echo "Shape type not supported yet";
                break;
        }
    }

    public function getShapeType()
    {
        return $this->shapeType;
    }

}