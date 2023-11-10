<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger', name: 'app_burger')]
    public function index(): Response
    {

        $aliments = [
            'tomate',
            'salade',
            'oignon',
            'cornichon',
            'steak',
            'fromage',
            'sauce'
        ];
        
        $nom = 'Arkunir Burger';

        $ma_variable = 'Salut les gens';
        return $this->render('burger/index.html.twig', [
            'controller_name' => 'BurgerController',
            'ma_variable' => $ma_variable,
            'aliments' => $aliments,
            'nom' => $nom
        ]);
    }

    #[Route('/liste_burger', name: 'liste_burger')]
    public function listeBurger(): Response
    {

        return $this->render('liste_burger.html.twig', []);
    }
}
