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
    public function list(float $a, float $b, float $c, GeometryCalculator $geometryService, \App\Model\Triangle $triangleModel): Response
    {
        $geometryService->setValues($a,$b,$c);
        $surface = $geometryService->getTriangleSumSurface();
        $circumference = $geometryService->getSumTriangleCircunference($surface);
        $triangleModel->create($a, $b, $c, $surface, $circumference);

        return new JsonResponse($triangleModel->toArray());
    }
}
