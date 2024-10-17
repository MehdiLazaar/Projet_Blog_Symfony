<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpainController extends AbstractController
{
    #[Route('/spain', name: 'app_spain')]
    public function index(): Response
    {
        return $this->render('spain/index.html.twig', [
            'controller_name' => 'SpainController',
        ]);
    }
}
