<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrazilController extends AbstractController
{
    #[Route('/brazil', name: 'app_brazil')]
    public function index(): Response
    {
        return $this->render('brazil/index.html.twig', [
            'controller_name' => 'BrazilController',
        ]);
    }
}
