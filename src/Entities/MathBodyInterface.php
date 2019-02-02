<?php

namespace App\Entities;

interface MathBodyInterface {
    public function getSurface(): float;
    public function getCircumference(): float;
    public function toArray(): array;
}