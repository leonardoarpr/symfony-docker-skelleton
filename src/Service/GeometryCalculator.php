<?php

namespace App\Service;

class GeometryCalculator
{
    private $a;
    private $b;
    private $c;

    public function __construct(float $a, float $b = 0, float $c = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getTriangleSumSurface(): float
    {
        return ($this->a * $this->b) / 2;
    }

    public function getSumTriangleCircunference(float $surface): float
    {
        return $surface * 2;
    }

    public function getSumCircleSurface(): float
    {
        return 3.14 * pow($this->a, 2);
    }

    public function getSumCircleCircunference(): float
    {
        return (2 * 3.14) * $this->a;
    }
}