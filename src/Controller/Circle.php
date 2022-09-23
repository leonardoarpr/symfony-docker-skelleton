<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Circle extends AbstractController
{
    const TYPE = 'circle';

    #[Route(path: '/circle/{radius}', name: 'circle', methods: ['GET'])]
    public function list(float $radius, GeometryCalculator $geometryService, \App\Model\Circle $circleModel): Response
    {
        $geometryService->setValues($radius);
        $surface = $geometryService->getSumCircleSurface();
        $circumference = $geometryService->getSumCircleCircunference();
        $circleModel->create($radius, $surface, $circumference);

        return new JsonResponse($circleModel->toArray());
    }

}