<?php

namespace App\DataFixtures;

use App\Entity\Spain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fichier = "./Spain.csv";
        $file = fopen($fichier, 'r');
        fgetcsv($file, 0, ","); // Modification du séparateur ici (virgule)

        $i = 0;
        while (($line = fgetcsv($file, 0, ",")) !== false) { // Modification du séparateur ici aussi
            if (count($line) >= 4) { // S'assure que la ligne contient au moins 4 éléments
                $spain = new Spain();
                $spain->setNomVille($line[0]);
                $spain->setDateCreation($line[1]);
                $spain->setAbreviation($line[2]);
                $spain->setRegion($line[3]);

                $manager->persist($spain);

                if (($i % 50) === 0) {
                    $manager->flush();
                    $manager->clear();
                }
                $i++;
            }
        }

        $manager->flush();
        fclose($file);
    }
}
