<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Triangle extends AbstractController
{
    const TYPE = 'triangle';

    #[Route(path: '/triangle/{a}/{b}/{c}', name: 'triangle', methods: ['GET'])]
    public function list(float $a, float $b, float $c, GeometryCalculator $geometryService): Response
    {
        $surface = ($b * $a) / 2;
        $circumference = $surface * 2;
        $geometryService->setValues(1,2);
        $response = [
            "type" => self::TYPE,
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "surface" => $surface,
            "circumference" => $circumference,
            "diameters" => $geometryService->getSumDiameters()
        ];

        return new JsonResponse($response);
    }
}
