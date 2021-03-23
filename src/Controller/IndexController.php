<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index_page")
     */
    public function index(Request $request)
    {
        $user = new User();
        $submit = false;
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $submit = true;
        }

        return $this->render('page/index.html.twig', [
            'form' => $form->createView(),
            'submit' => $submit
        ]);
    }
}
