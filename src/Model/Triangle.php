<?php

namespace App\Model;

use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Triangle
{
    const TYPE = 'triangle';

    private $a;
    private $b;
    private $c;
    private $surface;
    private $circumference;

    public function create(float $a, float $b, float $c, float $surface, float $circumference)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $b;
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
