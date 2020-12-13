<?php

namespace App\Entity;

use App\Repository\GookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GookRepository::class)
 */
class Gook
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoo(): ?string
    {
        return $this->foo;
    }

    public function setFoo(?string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }

    public function getBar(): ?string
    {
        return $this->bar;
    }

    public function setBar(?string $bar): self
    {
        $this->bar = $bar;

        return $this;
    }
}
