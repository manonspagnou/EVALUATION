<?php

namespace App\DataFixtures;

use App\Entity\Promotion;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PromotionFixtures extends BaseFixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            DegreeFixtures::class,
            YearFixtures::class,
            StartDateFixtures::class,
            EndDateFixtures::class,
            NotesFixtures::class
        ];
    }

    public function load(ObjectManager $manager)
    {
        $degrees = $this->getReferences('Degree');
        $years = $this->getReferences('Year');
        $i = 0;
        foreach($degrees as $degree)
        {
            foreach($years as $year)
            {
                $promo = new Promotion();
                $promo->setDegree($degree);
                $promo->setYear($year);
                $manager->persist($promo);

                $this->addReference('Promotion_'.$i, $promo);
                $i++;
            }
        }
        $manager->flush();
    }
}
