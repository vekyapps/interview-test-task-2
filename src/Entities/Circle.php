<?php

namespace App\Entities;


class Circle {

    private $radius;

    public function Circle($radius=0.0) {
        $this->radius = $radius;
    }

    /**
     * @return mixed
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
        $this->radius = $radius;
    }


}