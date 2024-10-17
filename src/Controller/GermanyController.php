<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GermanyController extends AbstractController
{
    #[Route('/germany', name: 'app_germany')]
    public function index(): Response
    {
        return $this->render('germany/index.html.twig', [
            'controller_name' => 'GermanyController',
        ]);
    }
}
