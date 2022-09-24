<?php

namespace App\Model;

class Circle
{
    const TYPE = 'circle';

    private $radius;
    private $surface;
    private $circumference;

    public function __construct(float $radius, float $surface, float $circumference)
    {
        $this->radius = $radius;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    public function create(float $radius, float $surface, float $circumference)
    {
        $this->radius = $radius;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    public function toArray()
    {
        return [
            "type" => self::TYPE,
            "radius" => $this->radius,
            "surface" => $this->surface,
            "circumference" => $this->circumference
        ];
    }

}