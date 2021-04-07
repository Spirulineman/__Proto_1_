<?php

namespace App\Controller;

use App\Entity\Rappels;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RappelsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/rappels', name: 'rappels')]
    public function index(): Response
    {
        $Rappels = $this->entityManager->getRepository(Rappels::class)->findAll();

        return $this->render('rappels/index.html.twig', [
            'Rappels' => $Rappels
        ]);
    }
}
