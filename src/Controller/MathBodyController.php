<?php

namespace App\Controller;

use App\Services\MathBodiesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entities\Triangle;
use App\Entities\Circle;

class MathBodyController extends AbstractController {

    /**
     * @Route("/circle/{radius}", name="circle", requirements={"radius"="\d+\.\d+"})
     */
    public function circle($radius) {
        $circle = new Circle(floatval($radius));
        $result = array_merge($circle->toArray(), [
            'surface' => number_format($circle->getSurface(), 2),
            'circumference' => number_format($circle->getCircumference(), 2)
        ]);
        return $this->json($result);
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}", name="triangle", requirements={"a"="\d+\.\d+","b"="\d+\.\d+","c"="\d+\.\d+"})
     */
    public function triangle($a, $b, $c) {
        $triangle = new Triangle(floatval($a), floatval($b), floatval($c));
        $result = array_merge($triangle->toArray(), [
            'surface' => number_format($triangle->getSurface(), 2),
            'circumference' => number_format($triangle->getCircumference(), 2)
        ]);
        return $this->json($result);
    }

}