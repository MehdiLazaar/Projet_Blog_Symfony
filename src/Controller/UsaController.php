<?php

namespace App\Controller;

use App\Repository\UsaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsaController extends AbstractController
{
    #[Route('/usa', name: 'app_usa')]
    public function index(UsaRepository $usaRepository): Response
    {
        $usaData = $usaRepository->findAll();
        return $this->render('usa/index.html.twig', [
            'usaData' => $usaData,
        ]);
    }
}
