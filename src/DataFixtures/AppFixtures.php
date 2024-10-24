<?php

namespace App\DataFixtures;

use App\Entity\France;
use App\Entity\Germany;
use App\Entity\Spain;
use App\Entity\Usa;
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
        //Load Usa Data
        $this->loadUsaData($manager);
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
                $spain->setLatitude($line[4]);
                $spain->setLongitude($line[5]);

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
                $france = new France();
                $france->setLocation($line[0]);
                $france->setTimePeriod($line[1]);
                $france->setDetails($line[2]);
                $france->setLatitude($line[3]);
                $france->setLongitude($line[4]);

                $manager->persist($france);

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
                $german = new Germany();
                $german->setPeriod($line[0]);
                $german->setCapital($line[1]);
                $german->setDescription($line[2]);
                $german->setLatitude($line[3]);
                $german->setLongitude($line[4]);

                $manager->persist($german);

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

    private function loadUsaData(ObjectManager $manager): void
    {
        $fichier = "./usa.csv";
        $file = fopen($fichier, 'r');
        if (!$file) {
            throw new \Exception("Could not open the file: $fichier");
        }
        // Ignore header row
        fgetcsv($file, 0, ",");

        $i = 0;
        while (($line = fgetcsv($file, 0, ",")) !== false) {
            if (count($line) >= 5) {
                try {
                    $usa = new Usa();
                    $usa->setPeriod($line[0]);
                    $usa->setCapital($line[1]);
                    $usa->setDescription($line[2]);
                    $usa->setLatitude((float)$line[3]);
                    $usa->setLongitude((float)$line[4]);

                    $manager->persist($usa);
                } catch (\Exception $e) {
                    echo "Error processing line: " . implode(',', $line) . " - " . $e->getMessage();
                }

                if (($i % 50) === 0) {
                    $manager->flush();
                    $manager->clear();
                }
                $i++;
            } else {
                echo "Invalid line format: " . implode(',', $line);
            }
        }

        $manager->flush();
        fclose($file);
    }

}
