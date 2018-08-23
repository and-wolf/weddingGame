<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class GameController extends AbstractController {

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'Test123') {
                return $this->redirectToRoute('firstSteps');
            }
        }

        return $this->render('game.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function firstSteps(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'Test123') {
                return $this->redirectToRoute('firstSteps');
            }
        }

        return $this->render('game2.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
