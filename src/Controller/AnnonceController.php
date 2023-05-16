<?php

namespace App\Controller;

use App\Entity\Annonce;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceController extends AbstractController
{
    private $doctrine;
    private $entityManager;

    public function __construct(Registry $doctrine, EntityManagerInterface $entityManager)
    {
        $this->doctrine = $doctrine;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/annonces", methods={"GET"})
     */
    public function index(): Response
    {
        $annonces = $this->doctrine->getRepository(Annonce::class)->findAll();

        return $this->json($annonces);
    }

    /**
     * @Route("/annonces", methods={"POST"})
     */
    public function create(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $annonce = new Annonce();
        $annonce->setName($data['name']);
        $annonce->setDescription($data['description']);
        $annonce->setPrice($data['price']);

        $this->entityManager->flush();

        return $this->json($annonce);
    }

    /**
     * @Route("/annonces/{id}", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        return $this->json($annonce);
    }

    /**
     * @Route("/annonces/{id}", methods={"PUT"})
     */
    public function update(Request $request, Annonce $annonce): Response
    {
        $data = json_decode($request->getContent(), true);

        $annonce->setName($data['name']);
        $annonce->setDescription($data['description']);
        $annonce->setPrice($data['price']);

        $this->entityManager->flush();

        return $this->json($annonce);
    }

    /**
     * @Route("/annonces/{id}", methods={"DELETE"})
     */
    public function delete(Annonce $annonce): Response
    {
        $this->entityManager->remove($annonce);
        $this->entityManager->flush();

        return $this->json(['message' => 'Annonce supprimée']);
    }

}
