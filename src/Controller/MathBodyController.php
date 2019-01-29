<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Services\MathBodiesService;
use App\Entities\Triangle;
use App\Entities\Circle;

class MathBodyController extends AbstractController {

    /**
     * @Route("/circle/{radius}", name="circle")
     */
    public function circle($radius) {
        $circle = new Circle(floatval($radius));

        $circumference = MathBodiesService::getCircleCircumference($circle);
        $surface = MathBodiesService::getCircleSurface($circle);

        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => round($surface, 2),
            'circumference' => round($circumference, 2)
        ]);
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}", name="triangle")
     */
    public function triangle($a, $b, $c) {
        $triangle = new Triangle($a, $b, $c);

        $circumference = MathBodiesService::getTriangleCircumference($triangle);
        $surface = MathBodiesService::getTriangleSurface($triangle);

        return $this->json([
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => round($surface, 2),
            'circumference' => round($circumference, 2)
        ]);
    }

}