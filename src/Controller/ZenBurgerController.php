<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZenBurgerController extends AbstractController
{
    #[Route('/zen_burger', name: 'zen_burger')]
    public function index(): Response
    {

        $aliments = [
            'Bun',
            'Tomates',
            'Oignons',
            'Cheddar',
            'Sauce Simoké',
            'Poulet Pané Croustillant',
        ];


        $nom = 'Zen Burger';

        $ma_variable = 'Salut la team';
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

        return $this->render('liste_burger/index.html.twig', []);
    }
}
