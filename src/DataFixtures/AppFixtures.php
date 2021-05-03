<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Product;
use App\Entity\User;
use DateInterval;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class AppFixtures extends Fixture
{
    protected DateInterval $invertDateInterval;

    /**
     * @throws Exception
     */
    private function invertDateInterval($duration): DateInterval
    {
        $dateInterval = new DateInterval($duration);
        $dateInterval->invert = 1;

        return $this->invertDateInterval = $dateInterval;
    }

    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        /**** Products ****/
        $product1 = new Product();
        $product1->setName('iPhone 12 mini 64 Go')
            ->setManufacturer('Apple')
            ->setModel('iphone 12')
            ->setDescription('The greatest Iphone')
            ->setPrice(81020)
            ->setTva(20.00)
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P4DT6H12M10S')))
            ->setUpdatedDate($product1->getCreatedDate()->add(new DateInterval('P2DT4H8M25S')))
            ;
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Galaxy S9 64 Go')
            ->setManufacturer('Samsung')
            ->setModel('Galaxy S9')
            ->setDescription('Amazing Android')
            ->setPrice(51000)
            ->setTva(20.00)
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P10DT14H36M52S')))
            ->setUpdatedDate($product2->getCreatedDate()->add(new DateInterval('P2DT4H8M25S')))
        ;
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName('Huawei P20 Lite 64 Go')
            ->setManufacturer('Huawei')
            ->setModel('P20 Lite')
            ->setDescription('The best value for money')
            ->setPrice(20099)
            ->setTva(20.00)
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P3DT6H12M10S')))
        ;
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setName('Galaxy S7 32 Go')
            ->setManufacturer('Samsung')
            ->setModel('Galaxy S7')
            ->setDescription('The best phone ever')
            ->setPrice(15010)
            ->setTva(20.00)
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P1DT8H16M10S')))
        ;
        $manager->persist($product4);

        $product5 = new Product();
        $product5->setName('Xiaomi Redmi Note 8')
            ->setManufacturer('Xiaomi')
            ->setModel('Redmi Note 8')
            ->setDescription('A huge smartphone')
            ->setPrice(16500)
            ->setTva(20.00)
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P8DT20H45M10S')))
            ->setUpdatedDate($product5->getCreatedDate()->add(new DateInterval('P2DT4H8M25S')))
        ;
        $manager->persist($product5);

        /**** Clients ****/
        $client1 = new Client();
        $client1->setName('Party Phone')
            ->setStatus(1)
            ->setAddress('18 rue des Acacias')
            ->setZip('87000')
            ->setTown('Limoges')
            ->setCountry('France')
            ->setSiret('49400468500024')
            ->setSiren('494004685')
            ->setRcs('Paris A 494 004 685')
            ->setVatNumber('FR78494004862')
            ->setApiKey()
            ->setSecret()
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P6DT6H56M10S')))
            ->setUpdatedDate($client1->getCreatedDate()->add(new DateInterval('P2DT12H26M25S')))
        ;
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setName('ElectroDiscount')
            ->setStatus(1)
            ->setAddress('26 Avenue du faubourg')
            ->setZip('67000')
            ->setTown('Strasbourg')
            ->setCountry('France')
            ->setSiret('58200548500045')
            ->setSiren('582005485')
            ->setRcs('Strasbourg B 582 005 485')
            ->setVatNumber('FR26494005462')
            ->setApiKey()
            ->setSecret()
            ->setCreatedDate((new DateTimeImmutable())->add($this->invertDateInterval('P5DT14H34M10S')))
        ;
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setName('Fnarty')
            ->setStatus(1)
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setSiret()
            ->setSiren()
            ->setRcs()
            ->setVatNumber()
            ->setApiKey()
            ->setSecret()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($client3);

        /**** Users ****/
        $user1 = new User();
        $user1->setClientId($client3->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
            ;
        $manager->persist($user1);

        $user1 = new User();
        $user1->setClientId($client2->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($user1);

        $user2 = new User();
        $user2->setClientId($client1->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($user2);

        $user3 = new User();
        $user3->setClientId($client3->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($user3);

        $user4 = new User();
        $user4->setClientId($client1->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($user4);

        $user5 = new User();
        $user5->setClientId($client2->getId())
            ->setFirstName()
            ->setLastName()
            ->setEmail()
            ->setPhone()
            ->setAddress()
            ->setZip()
            ->setTown()
            ->setCountry()
            ->setCreatedDate()
            ->setUpdatedDate()
        ;
        $manager->persist($user5);

        $manager->flush();
    }
}
