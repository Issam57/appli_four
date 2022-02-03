<?php

namespace App\Entity;

use App\Repository\RecuitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecuitRepository::class)
 */
class Recuit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $recuit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecuit(): ?int
    {
        return $this->recuit;
    }

    public function setRecuit(int $recuit): self
    {
        $this->recuit = $recuit;

        return $this;
    }
}
