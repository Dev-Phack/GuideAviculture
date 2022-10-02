<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
//        if (!$this->getUser()->isVerified()){
//            $this->addFlash('error', 'Vous devez vérifier votre adresse email avant de pouvoir vous connecter.');
//            return $this->redirectToRoute('app_logout');
//        }
//        $this->addFlash('success', 'Bienvenue sur GuideAvi');
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('home/superadmin.html.twig');
        }
        elseif($this->isGranted('ROLE_USER')) {
            return $this->render('home/user.html.twig');
        }
        return $this->redirectToRoute('app_login');
    }
}
