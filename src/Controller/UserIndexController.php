<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserIndexController extends AbstractController
{
    #[Route('/user/index', name: 'app_user_index')]
    public function index(): Response
    {
        return $this->render('user_index/index.html.twig');
    }
}
