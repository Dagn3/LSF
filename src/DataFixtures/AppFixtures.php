<?php

namespace App\DataFixtures;

use App\Entity\Fromage;
use App\Entity\Pate;
use App\Entity\Provenance;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 10; $i++) {



            $fromage = new Fromage();
            $fromage->setNom('Fromage '.$i);
            $fromage->setSlug($fromage->getNom());
            $fromage->setPrix(mt_rand(10, 100));
            $fromage->setDescription('Description du produit'.$i);
            $fromage->setDisplay(1);
            $fromage->setImage("godUsopp.jpg");;




            $manager->persist($fromage);
            $manager->flush();


        }

        $manager->flush();
    }
}
