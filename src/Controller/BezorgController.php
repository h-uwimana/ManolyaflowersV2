<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BezorgController extends AbstractController
{
    #[Route('/bezorging', name: 'bezorg')]
    public function index(): Response
    {
        return $this->render('bezorg/index.html.twig', [
            'controller_name' => 'BezorgController',
        ]);
    }
}
