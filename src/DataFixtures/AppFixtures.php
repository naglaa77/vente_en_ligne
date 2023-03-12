<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Clients;
use App\Entity\Produits;
use App\Entity\Commandes;
use App\Factory\ClientsFactory;
use App\Factory\ProduitsFactory;
use App\Factory\CommandesFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');   
        
        ProduitsFactory::createMany(100);
    
        $clients = ClientsFactory::createMany(40);

        CommandesFactory::createMany(100, function() {
            return [
                'produit' => ProduitsFactory::random(),
                'client' =>ClientsFactory::random(),
            ];
        });

    //     $clients = ClientsFactory::createMany(50,function() {
    //     return [
    //         'commandes' => CommandesFactory::new(function () {
    //             return [
    //             'produit' =>  ProduitsFactory::random(),

    //         ];
    //     })->many(1, 5),

           
    //     ];

    // });

            $manager->flush();
        }
}
