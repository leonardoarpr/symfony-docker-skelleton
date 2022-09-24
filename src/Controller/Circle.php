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
    public function list(float $radius): Response
    {
        $geometryService =  new GeometryCalculator($radius);
        $surface = $geometryService->getSumCircleSurface();
        $circumference = $geometryService->getSumCircleCircunference();
        $circleModel = new \App\Model\Circle($radius, $surface, $circumference);

        return new JsonResponse($circleModel->toArray());
    }

}