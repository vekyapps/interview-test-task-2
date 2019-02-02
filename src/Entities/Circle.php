<?php

namespace App\Entities;


/**
 * Class Circle
 * @package App\Entities
 */
class Circle implements MathBodyInterface {

    use MathBodyTrait;

    /**
     * @var float
     */
    private $radius;


    /**
     * @var string
     */
    protected $type = "circle";

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius = 0.0) {
        $this->radius = $radius;
    }


    /**
     * @return float
     */
    public function getRadius(): float {
        return $this->radius;
    }


    /**
     * @param float $radius
     */
    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getSurface(): float {
        return pi() * pow($this->getRadius(), 2);
    }

    /**
     * @return float
     */
    public function getCircumference(): float {
        return 2 * pi() * $this->radius;
    }

}