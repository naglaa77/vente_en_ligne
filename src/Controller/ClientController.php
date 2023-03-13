<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Commandes;
use App\Entity\Produits;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client_products')]
    public function index(EntityManagerInterface $entityManger): Response
    {
        $name = "tstrosin";
        $user = $entityManger->getRepository(Clients::class)->findByRecentArticle($name);
        $articlesPlusChare = $entityManger->getRepository(Commandes::class)->findByLesPlusChers($name);
        return $this->render('product/index.html.twig',[
            'user' => $user,
            'name' => $name,
            'articlePlus' => $articlesPlusChare
        ]);
    }
}
