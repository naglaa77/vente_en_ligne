<?php

namespace App\Controller;

use App\Entity\Produits;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    // #[Route('/product', name: 'product')]
    // public function index(EntityManagerInterface $entityManger): Response
    // {
    //     $product = $entityManger->getRepository(Produits::class)->findAll();
    //     dd($product);
    //     return $this->render('product/index.html.twig');
    // }
}
