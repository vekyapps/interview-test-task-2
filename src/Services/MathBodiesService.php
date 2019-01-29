<?php

namespace App\Services;

use App\Entities\Circle;
use App\Entities\Triangle;

class MathBodiesService {

    public static function getCircleSurface(Circle &$circle) {
        return pi() * pow($circle->getRadius(), 2);
    }

    public static function getCircleCircumference(Circle &$circle) {
        return 2 * pi() * $circle->getRadius();
    }

    public static function getTriangleSurface(Triangle &$triangle) {
        $s = ($triangle->getA() + $triangle->getB() + $triangle->getC()) / 2;
        $surface = sqrt($s*($s - $triangle->getA())*($s - $triangle->getB())*($s - $triangle->getC()));
        return $surface;
    }

    public static function getTriangleCircumference(Triangle &$triangle) {
        return $triangle->getA() + $triangle->getB() + $triangle->getC();
    }
}