<?php

namespace App\Entities;

class Triangle {

    private $a;
    private $b;
    private $c;

    public function Triangle($a=0.0, $b=0.0, $c=0.0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a): void
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b): void
    {
        $this->b = $b;
    }

    /**
     * @return mixed
     */
    public function getC(): float
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     */
    public function setC($c): void
    {
        $this->c = $c;
    }

}