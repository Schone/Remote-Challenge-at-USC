<?php

namespace App\Entity;

abstract class ShapeClass
{

    protected $type;
    protected $color;
    protected $border_size;
    protected $points;

    public function __construct($type, $param)
    {
        $this->type = $type;
        $this->setParam($param);
    }

    public function print()
    {
        echo 'About '.$this->type . ": color: " . $this->color . "; border size: " . $this->border_size;
    }

    public function setParam($param)
    {
        if ($param['color'])
            $this->setColor($param['color']);
        if ($param['border_size'])
            $this->setBorderSize($param['border_size']);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBorderSize()
    {
        return $this->border_size;
    }

    public function setBorderSize($border_size)
    {
        $this->border_size = $border_size;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function setPoints($points)
    {
        $this->points = $points;
    }


}