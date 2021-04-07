<?php

namespace App\Entity;

use App\Repository\RappelsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RappelsRepository::class)
 */
class Rappels
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $User_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Formation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date_Validation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->User_name;
    }

    public function setUserName(string $User_name): self
    {
        $this->User_name = $User_name;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->Formation;
    }

    public function setFormation(string $Formation): self
    {
        $this->Formation = $Formation;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->Date_Validation;
    }

    public function setDateValidation(\DateTimeInterface $Date_Validation): self
    {
        $this->Date_Validation = $Date_Validation;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
}
