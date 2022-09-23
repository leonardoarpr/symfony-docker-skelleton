<?php

namespace App\Service;

class GeometryCalculator
{
    private $a;
    private $b;

    public function setValues(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSumAreas()
    {
        return $this->a + $this->b;
    }

    public function getSumDiameters()
    {
        return $this->a + $this->b;
    }
}