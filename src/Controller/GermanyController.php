<?php

namespace App\Controller;

use App\Repository\GermanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GermanyController extends AbstractController
{
    #[Route('/germany', name: 'app_germany')]
    public function index(GermanyRepository $germanRepository): Response
    {
        $germanData = $germanRepository->findAll();
        return $this->render('germany/index.html.twig', [
            'germanData' => $germanData,
        ]);
    }
}
