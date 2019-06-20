<?php

namespace App\Entity;

class CircleClass extends ShapeClass
{
    private $radius;
    private $center;

    public function __construct($type, $param)
    {
        parent::__construct($type, $param);
        $radius = isset($param['radius']) ? $param['radius'] : rand(16, 150);
        $this->radius = $radius;
        $center = isset($param['center']) ? $param['center'] : [rand(0, 0), rand(0, 0)];
        $this->center = $center;
        $this->points = $this->setCirclePoints();
    }

    public function print()
    {
        echo parent::print() . "; radius = " . $this->radius . "; center = (" . $this->center[0] . ", " . $this->center[1] . "); \n";
    }

    public function setCirclePoints()
    {
        $center = $this->center;
        $radius = $this->radius;
        $points = array();
        for ($x = 0; $x <= $radius; $x++) {
            $ySquare = $radius * $radius - $x * $x;
            $y = sqrt($ySquare);
            if ($y == intval($y)) {
                $points[] = [$x, $y];
                if ($x != 0)
                    $points[] = [-$x, $y];
                if ($y != 0)
                    $points[] = [$x, -$y];
                if ($x != 0 && $y != 0)
                    $points[] = [-$x, -$y];
            }
        }
        return $points;
    }


    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getCenter()
    {
        return $this->center;
    }

    public function setCenter($center)
    {
        $this->center = $center;
    }

}