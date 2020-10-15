<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    function getPerimeter($radius){
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
    public function getVolume($radius,$height)
    {
        $volume = $this->getPerimeter($radius) * $height + 2 * $this->getBaseArea($radius);
        return $volume;
    }
    function getBaseArea($radius){
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

}