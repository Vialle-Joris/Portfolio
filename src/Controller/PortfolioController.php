<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/formulaire', name: 'app_portfolio_f')]
    public function formulaire(): Response
    {
        return $this->render('portfolio/formulaire.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/cv', name: 'app_portfolio_cv')]
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/plus', name: 'app_portfolio_plus')]
    public function plus(): Response
    {
        return $this->render('portfolio/plus.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio_p')]
    public function portfolio(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
