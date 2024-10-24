<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MexicoController extends AbstractController
{
    #[Route('/mexico', name: 'app_mexico')]
    public function index(): Response
    {
        return $this->render('mexico/index.html.twig', [
            'controller_name' => 'MexicoController',
        ]);
    }
}
