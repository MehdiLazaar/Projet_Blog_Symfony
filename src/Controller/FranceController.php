<?php

namespace App\Controller;

use App\Repository\FranceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FranceController extends AbstractController
{
    #[Route('/france', name: 'app_france')]
    public function index(FranceRepository $franceRepository): Response
    {
        $franceData = $franceRepository->findAll();
        return $this->render('france/index.html.twig', [
            'franceData' => $franceData,
        ]);
    }
}
