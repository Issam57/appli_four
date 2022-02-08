<?php

namespace App\Entity;

use App\Repository\ArretRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ArretRepository::class)
 */
class Arret
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice({1,2,3,4,5,6,11,12,13,14,15,16,17,18,19,20,21,22,23})
     */
    private $four;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\GreaterThanOrEqual(0)
     * @Assert\LessThanOrEqual(16)
     */
    private $emplacement;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFour(): ?int
    {
        return $this->four;
    }

    public function setFour(int $four): self
    {
        $this->four = $four;

        return $this;
    }

    public function getEmplacement(): ?int
    {
        return $this->emplacement;
    }

    public function setEmplacement(?int $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}
