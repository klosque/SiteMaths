<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")
 */
class Classe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\matiere", mappedBy="id_classe")
     */
    private $matiere;

    public function __construct()
    {
        $this->matiere = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|matiere[]
     */
    public function getMatiere(): Collection
    {
        return $this->matiere;
    }

    public function addMatiere(matiere $matiere): self
    {
        if (!$this->matiere->contains($matiere)) {
            $this->matiere[] = $matiere;
            $matiere->setIdClasse($this);
        }

        return $this;
    }

    public function removeMatiere(matiere $matiere): self
    {
        if ($this->matiere->contains($matiere)) {
            $this->matiere->removeElement($matiere);
            // set the owning side to null (unless already changed)
            if ($matiere->getIdClasse() === $this) {
                $matiere->setIdClasse(null);
            }
        }

        return $this;
    }
}
