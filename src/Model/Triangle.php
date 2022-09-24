<?php

namespace App\Model;

class Triangle
{
    const TYPE = 'triangle';

    private $a;
    private $b;
    private $c;
    private $surface;
    private $circumference;

    public function __construct(float $a, float $b, float $c, float $surface, float $circumference)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    public function toArray(): array
    {
        return [
            "type" => self::TYPE,
            "a" => $this->a,
            "b" => $this->b,
            "c" => $this->c,
            "surface" => $this->surface,
            "circumference" => $this->circumference,
        ];
    }
}
