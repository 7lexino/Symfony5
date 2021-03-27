<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimerCController extends AbstractController
{
    /**
     * @Route("/primer/c", name="primer_c")
     */
    public function index(): Response
    {
        return $this->render('primer_c/index.html.twig', [
            'controller_name' => 'PrimerCController',
        ]);
    }
}
