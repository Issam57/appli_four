<?php

namespace App\Controller;

use App\Entity\Recuit;
use App\Form\RecuitType;
use App\Others\CalculDate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecuitController extends AbstractController
{
    private $test;

    /**
     * @Route("/recuit", name="recuit")
     *
     */
    public function index(Request $request, EntityManagerInterface $manager, CalculDate $calculDate): Response
    {

        $recuit = new Recuit();
        $form = $this->createForm(RecuitType::class, $recuit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $result = $form->getData();

            $manager->persist($result);

            //$manager->flush();

            $this->test = $request->request->all('recuit')['recuit'];

        }

        $res = $calculDate->calculDate($this->test);


        return $this->render('recuit/index.html.twig', [
            'form' => $form->createView(),
            'res' => $res
        ]);
    }
}
