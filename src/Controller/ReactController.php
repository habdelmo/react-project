<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReactController extends AbstractController
{

    #[Route('/invoice', name: 'app__invoice')]
    public function indexReact(): Response
    {
        return $this->render('invoice/index.html.twig');
    }
}
