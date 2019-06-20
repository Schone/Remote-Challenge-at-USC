<?php

namespace App\Controller;

use App\Service\ShapeService;

class ShapeController
{
    public static function drawShape($array){
        $shapes = [];
        foreach ($array as $one)
        {
            $type = $one['type'];
            $params = $one['params'];
            $shapeService = new ShapeService();
            $shape = $shapeService->setShape($type, $params);
            if($shape == null){
                throw new \Exception($type . ' is unknown shape type');
            }else{
                $points = $shapeService->getShapePoints($shape);
            }
            $shapes[] = $points;
            //$shape->print();
        }
        return $shapes;
    }

}