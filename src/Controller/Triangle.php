<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Triangle extends AbstractController
{
    #[Route(path: '/triangle/{a}/{b}/{c}', name: 'triangle', methods: ['GET'])]
    public function list(float $a, float $b, float $c): Response
    {
        $geometryService = new GeometryCalculator($a, $b, $c);
        $surface = $geometryService->getTriangleSumSurface();
        $circumference = $geometryService->getSumTriangleCircunference($surface);
        $triangleModel = new \App\Model\Triangle($a, $b, $c, $surface, $circumference);

        return new JsonResponse($triangleModel->toArray());
    }
}
