<?php

 namespace App\Service;

use App\Entity\CircleClass;
use App\Entity\ShapeClass;
use App\Entity\SquareClass;

class ShapeService
{
    public function setShape($type, $params){
        $shape = null;
        if($type == 'circle'){
            $shape = new CircleClass($type, $params);
        }elseif ($type == 'square'){
            $shape = new SquareClass($type, $params);
        } else{
            return null;
        }
        return $shape;
    }
    public function getShapePoints(ShapeClass $shape){
        $points = $shape->getPoints();
        return $points;
    }
}