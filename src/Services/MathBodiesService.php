<?php

namespace App\Services;

use App\Entities\MathBodyInterface;

/**
 * Class MathBodiesService
 * @package App\Services
 */
class MathBodiesService {

    /**
     * @param MathBodyInterface $mathBodyA
     * @param MathBodyInterface $mathBodyB
     * @return float
     */
    public static function sumMathBodySurfaces(MathBodyInterface $mathBodyA, MathBodyInterface $mathBodyB): float {
        return $mathBodyA->getSurface() + $mathBodyB->getSurface();
    }

    /**
     * @param MathBodyInterface $mathBodyA
     * @param MathBodyInterface $mathBodyB
     * @return float
     */
    public static function sumMathBodyCircumferences(MathBodyInterface $mathBodyA, MathBodyInterface $mathBodyB): float {
        return $mathBodyA->getCircumference() + $mathBodyB->getCircumference();
    }

}