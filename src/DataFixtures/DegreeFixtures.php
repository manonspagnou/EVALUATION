<?php

namespace App\DataFixtures;

use App\Entity\Degree;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DegreeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $array = ['Développeur Web et Web Mobile', 'Titre professionnel - Designer Web', 'DEAES - Diplôme d\'Etat d\'Accompagnant Educatif et Social', 'CAP Electricien', 'BTS Communication'];
        for($i = 0; $i < count($array); $i++ ){
            $degree = new Degree();
            $degree->setName($array[$i]);
            $this->addReference('Degree_'.$i, $degree);
            $manager->persist($degree);
        }
        $manager->flush();
    }
}
