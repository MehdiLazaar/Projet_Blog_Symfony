<?php

namespace App\Entity;

use App\Repository\FranceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FranceRepository::class)]
class France
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Location = null;

    #[ORM\Column(length: 100)]
    private ?string $TimePeriod = null;

    #[ORM\Column(length: 255)]
    private ?string $details = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(string $Location): static
    {
        $this->Location = $Location;

        return $this;
    }

    public function getTimePeriod(): ?string
    {
        return $this->TimePeriod;
    }

    public function setTimePeriod(string $TimePeriod): static
    {
        $this->TimePeriod = $TimePeriod;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

        return $this;
    }
}
