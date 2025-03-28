<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Music;
<<<<<<< HEAD
=======
use Faker\Factory;

>>>>>>> 80fffa8 (ajout des fichiers)
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        for ($i=0; $i <= 10; $i++){
            $music = new Music();
            $music->setName("music" . $i);
            $music->setUrl("url" .$i);

            $manager->persist($music);
        }
=======
        $faker = Factory::create();

        for ($i=1; $i <= 10; $i++) {
            $music = new Music();
            $music->setName("Music" . $i);
            $music->setUrl("url" . $i);
            $music->setAuthor($faker->name());
            
            $manager->persist($music);
        }

>>>>>>> 80fffa8 (ajout des fichiers)
        $manager->flush();
    }
}
