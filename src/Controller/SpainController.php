<?php

namespace App\Controller;

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
        // Get current page from query parameters
        $page = $request->query->getInt('page', 1);
        // Number of items per page
        $limit = 5;
        // Fetch the total number of items
        $totalItems = $spainRepository->count([]);
        // Fetch paginated results
        $spainData = $spainRepository->findBy([], null, $limit, ($page - 1) * $limit);
        // Calculate total pages
        $totalPages = ceil($totalItems / $limit);

        return $this->render('spain/index.html.twig', [
            'spainData' => $spainData,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }
}
