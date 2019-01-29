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
    public function circle($radius)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MathBodyController.php',
        ]);
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}", name="triangle")
     */
    public function triangle($a, $b, $c)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MathBodyController.php',
        ]);
    }

}
