<?php

namespace App\DataFixtures\ORM;

use App\Entity\Astronaut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AstronautFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Astronaut();
        $product->setName('wilson');
        $manager->persist($product);
        $manager->flush();
    }
}