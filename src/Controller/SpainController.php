<?php

namespace App\Controller;

use App\Repository\SpainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpainController extends AbstractController
{
    #[Route('/spain', name: 'app_spain')]
    public function index(SpainRepository $spainRepository): Response
    {
        $spainData = $spainRepository -> findAll();
        return $this->render('spain/index.html.twig', [
            'spainData' => $spainData,
        ]);
    }
}
