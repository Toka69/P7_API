<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**** Products ****/
        $product1 = new Product();
        $product1->setName()
            ->setManufacturer()
            ->setModel()
            ->setDescription()
            ->setPrice()
            ->setTva()
            ->setCreatedDate()
            ->setUpdatedDate()
            ;
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName()
            ->setManufacturer()
            ->setModel()
            ->setDescription()
            ->setPrice()
            ->setTva()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName()
            ->setManufacturer()
            ->setModel()
            ->setDescription()
            ->setPrice()
            ->setTva()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setName()
            ->setManufacturer()
            ->setModel()
            ->setDescription()
            ->setPrice()
            ->setTva()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($product4);

        $product5 = new Product();
        $product5->setName()
            ->setManufacturer()
            ->setModel()
            ->setDescription()
            ->setPrice()
            ->setTva()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($product5);

        $manager->flush();
    }
}
