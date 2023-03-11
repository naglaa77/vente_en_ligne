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
    #[Route('/client', name: 'product')]
    public function index(EntityManagerInterface $entityManger): Response
    {
        $name = "zrutherford";
        //$user = $entityManger->getRepository(Clients::class)->findBy(['nom' => $name]);
        $user = $entityManger->getRepository(Clients::class)->findByExampleField($name);
dd($user);
        return $this->render('product/index.html.twig',[
            'user' => $user,
            'name' => $name
        ]);
    }
}
