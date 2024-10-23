<?php

namespace App\DataFixtures;

use App\Entity\France;
use App\Entity\Germany;
use App\Entity\Spain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Load Spain data
        $this->loadSpainData($manager);

        // Load France Data
        $this->loadFranceData($manager);
        //Load German Data
        $this->loadGermanData($manager);
    }

    private function loadSpainData(ObjectManager $manager): void
    {
        $fichier = "./Spain.csv";
        $file = fopen($fichier, 'r');
        // Ignore header row
        fgetcsv($file, 0, ",");

        $i = 0;
        while (($line = fgetcsv($file, 0, ",")) !== false) {
            if (count($line) >= 4) {
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

    private function loadFranceData(ObjectManager $manager): void
    {
        $fichier = "./france.csv";
        $file = fopen($fichier, 'r');
        // Ignore header row
        fgetcsv($file, 0, ",");

        $i = 0;
        while (($line = fgetcsv($file, 0, ",")) !== false) {
            if (count($line) >= 3) {
                $historicalCapital = new France();
                $historicalCapital->setLocation($line[0]);
                $historicalCapital->setTimePeriod($line[1]);
                $historicalCapital->setDetails($line[2]);

                $manager->persist($historicalCapital);

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
    private function loadGermanData(ObjectManager $manager): void
    {
        $fichier = "./germanyData.csv";
        $file = fopen($fichier, 'r');
        // Ignore header row
        fgetcsv($file, 0, ",");

        $i = 0;
        while (($line = fgetcsv($file, 0, ",")) !== false) {
            if (count($line) >= 3) {
                $germanCapitalHistory = new Germany();
                $germanCapitalHistory->setPeriod($line[0]);
                $germanCapitalHistory->setCapital($line[1]);
                $germanCapitalHistory->setDescription($line[2]);

                $manager->persist($germanCapitalHistory);

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
