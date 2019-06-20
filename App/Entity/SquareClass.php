<?php

namespace App\Entity;

class SquareClass extends ShapeClass
{
    private $side;
    private $point;

    public function __construct($type, $param)
    {
        parent::__construct($type, $param);
        $side = isset($param['side']) ? $param['side'] : rand(1, 10);
        $this->side = $side;
        $point = isset($param['point']) ? $param['point'] : [rand(-10, 10), rand(-10, 10)];
        $this->point = $point;
        $this->points = $this->setSquarePoints();
    }

    public function setSquarePoints()
    {
        $point1 = $this->point;
        $side = $this->side;
        $point2 = [$point1[0], $point1[1] - $side];
        $point3 = [$point1[0] + $side, $point1[1]];
        $point4 = [$point1[0] + $side, $point1[1] - $side];
        $points = [$point1, $point2, $point3, $point4];
        return $points;
    }

    public function print()
    {
        echo parent::print() . "; point = (" . $this->point[0] . ", " . $this->point[1] . "); side = " . $this->side . "; \n";
    }

    public function getSide()
    {
        return $this->side;
    }

    public function setSide($side)
    {
        $this->side = $side;
    }

    public function getPoint()
    {
        return $this->point;
    }

    public function setPoint($point)
    {
        $this->point = $point;
    }


}