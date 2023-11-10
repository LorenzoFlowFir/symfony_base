<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeBurgerController extends AbstractController
{
    #[Route('/liste/burger', name: 'app_liste_burger')]
    public function index(): Response
    {
        return $this->render('liste_burger/index.html.twig', [
            'controller_name' => 'ListeBurgerController',
        ]);
    }
}
