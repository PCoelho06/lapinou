<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/mes-services', name: 'app_services')]
    public function showServices(): Response
    {
        return $this->render('home/services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function showPortfolio(): Response
    {
        return $this->render('home/portfolio.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/à-propos-de-moi', name: 'app_about_me')]
    public function showAbout(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/me-contacter', name: 'app_contact')]
    public function showContact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/mentions-legales', name: 'app_terms')]
    public function showLegalMentions(): Response
    {
        return $this->render('home/terms.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/politique-de-confidentialite', name: 'app_privacy')]
    public function showPrivacy(): Response
    {
        return $this->render('home/privacy.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/politique-accessibilite', name: 'app_accessibility')]
    public function showAccessibility(): Response
    {
        return $this->render('home/accessibility.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
