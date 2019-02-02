<?php

namespace App\Entities;

trait MathBodyTrait {
    /**
     * @return array
     */
    public function toArray(): array {
        return get_object_vars($this);
    }

}