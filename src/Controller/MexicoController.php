<?php

namespace App\Controller;

use App\Repository\MexicoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MexicoController extends AbstractController
{
    #[Route('/mexico', name: 'app_mexico')]
    public function index(MexicoRepository $mexicoRepository): Response
    {
        $mexicoData = $mexicoRepository->findAll();
        return $this->render('mexico/index.html.twig', [
            'mexicoData' => $mexicoData,
        ]);
    }
}
