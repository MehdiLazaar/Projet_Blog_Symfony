<?php

namespace App\Controller;

use App\Repository\BrazilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrazilController extends AbstractController
{
    #[Route('/brazil', name: 'app_brazil')]
    public function index(BrazilRepository $brazilRepository): Response
    {
        $brazilData = $brazilRepository->findAll();
        return $this->render('brazil/index.html.twig', [
            'brazilData' => $brazilData,
        ]);
    }
}
