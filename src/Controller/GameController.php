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
    public function firstQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if(strtolower($answer) == strtolower('swplat-725')) {
                return $this->redirect('really-you-got-it');
            }
        }

        return $this->render('game.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function secoundQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('really-you-got-it');
            }
        }

        return $this->render('game2.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function thirdQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('oh-yeah-here-we-go');
            }
        }

        return $this->render('game3.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function fourthQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('the-final-countdown');
            }
        }

        return $this->render('game4.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function fifthQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('ok-maybe-not');
            }
        }

        return $this->render('game5.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function sixthQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('just-another-useless-question');
            }
        }

        return $this->render('game6.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function seventhQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('nearly-the-end---not');
            }
        }

        return $this->render('game7.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function eighthQuestion(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('answer', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Das ist die Antwort, ich bin mir sicher!'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $answer = $form->getData()['answer'];
            if($answer == 'SWPLAT-725') {
                return $this->redirect('ha-ha-you-will-never-get-this');
            }
        }

        return $this->render('game8.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function finalAction(Request $request)
    {
        return $this->render('final.html.twig', []);
    }
}
