<?php

namespace App\Entities;


class Circle {

    private $radius;

    public function __construct($radius=0.0) {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = floatval($radius);
    }


}