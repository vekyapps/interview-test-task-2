<?php

namespace App\Entities;

/**
 * Class Triangle
 * @package App\Entities
 */
class Triangle implements MathBodyInterface {

    use MathBodyTrait;

    /**
     * @var float
     */
    private $a;

    /**
     * @var float
     */
    private $b;

    /**
     * @var float
     */
    private $c;

    /**
     * @var string
     */
    protected $type = "triangle";

    /**
     * Triangle constructor.
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function  __construct(float $a=0.0, float $b=0.0, float $c=0.0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    /**
     * @return float
     */
    public function getA(): float {
        return $this->a;
    }


    /**
     * @param float $a
     */
    public function setA(float $a): void {
        $this->a = floatval($a);
    }


    /**
     * @return float
     */
    public function getB(): float {
        return $this->b;
    }


    /**
     * @param float $b
     */
    public function setB(float $b): void {
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function getC(): float {
        return $this->c;
    }


    /**
     * @param float $c
     */
    public function setC(float $c): void {
        $this->c = $c;
    }

    /**
     * @return float
     */
    public function getSurface(): float {
        $s = ($this->getA() + $this->getB() + $this->getC()) / 2;
        $surface = sqrt($s*($s - $this->getA())*($s - $this->getB())*($s - $this->getC()));
        return $surface;
    }


    /**
     * @return float
     */
    public function getCircumference(): float {
        return $this->getA() + $this->getB() + $this->getC();
    }

}