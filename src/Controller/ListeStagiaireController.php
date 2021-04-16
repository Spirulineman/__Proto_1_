<?php

namespace App\Controller;

use App\Entity\ListeStagiaire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListeStagiaireController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/liste', name: 'liste_stagiaire')]
    public function index(EntityManagerInterface $em): Response
    {
           $repo = $em->getRepository(ListeStagiaire::class);

            /* dd($repo->findAll()); */

            $liste = $repo->findAll();

        return $this->render('liste_stagiaire/index.html.twig', ['listes' => $liste]);
    }
}
