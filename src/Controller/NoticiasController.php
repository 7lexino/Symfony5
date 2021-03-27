<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoticiasController extends AbstractController
{
    /**
     * @Route("/noticias", name="noticias")
     */
    public function index(): Response
    {
    	$noticias = [
    		[
    			'id' => 1,
    			'titulo' => 'Título de la noticia 1',
    		],
    		[
    			'id' => 2,
    			'titulo' => 'Título 2 de la noticia',
    		],
    		[
    			'id' => 3,
    			'titulo' => 'Título de la tercera noticia',
    		],
    		[
    			'id' => 4,
    			'titulo' => 'Wow, la 4ta noticia',
    		],
    	];

        return $this->render('noticias/index.html.twig', [
            'noticiasPack' => $noticias,
        ]);
    }

    /**
     * @Route("/noticia/{id}", defaults={"id"=1}, name="noticiaSingle")
     */
    public function noticiaSingle($id): Response
    {
        return $this->render('noticias/single.html.twig', [
            'idNoticia' => $id,
        ]);
    }
}
