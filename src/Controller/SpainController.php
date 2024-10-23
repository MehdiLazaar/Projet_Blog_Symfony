<?php

namespace App\Controller;

use App\Repository\FranceRepository;
use App\Repository\SpainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpainController extends AbstractController
{
    #[Route('/spain', name: 'app_spain')]
    public function index(SpainRepository $spainRepository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 5;
        $totalItems = $spainRepository->count([]);
        $spainData = $spainRepository->findBy([], null, $limit, ($page - 1) * $limit);
        $totalPages = ceil($totalItems / $limit);

        dump($spainData);

        return $this->render('spain/index.html.twig', [
            'spainData' => $spainData,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }
    #[Route('/spain/visit', name: 'app_spain_visit')]
    public function visitSpain(FranceRepository $franceRepository): Response
    {
        return $this->render('spain/visit.html.twig', []);
    }
}