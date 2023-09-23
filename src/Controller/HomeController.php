<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $test = $doctrine->getConnection();

        dd($test);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'connection'      => $test
        ]);
    }
}
