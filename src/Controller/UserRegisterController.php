<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserRegisterController extends AbstractController
{
    /**
     * @Route("/user/register", name="user_register")
     */
    public function index(): Response
    {
        return $this->render('user_register/index.html.twig', [
            'controller_name' => 'UserRegisterController',
        ]);
    }
}
