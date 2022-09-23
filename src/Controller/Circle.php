<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Circle extends AbstractController
{

    #[Route(path: '/circle/{radius}', name: 'circle', methods: ['GET'])]
    public function list(float $radius, GeometryCalculator $geometryService): Response
    {
        $surface = 3.14 * pow($radius, 2);
        $circumference = (2 * 3.14) * $radius;
        $geometryService->setValues(1,2);
        $response = [
            "type" => "circle",
            "radius" => $radius,
            "surface" => $surface,
            "circumference" => $circumference,
            "areas" => $geometryService->getSumAreas()
        ];
        return new JsonResponse($response);
    }

}