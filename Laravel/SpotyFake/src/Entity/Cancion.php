<?php

namespace App\Entity;

use App\Repository\CancionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CancionRepository::class)]
class Cancion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genero = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $duracion = null;

    #[ORM\ManyToMany(targetEntity: Cantante::class)]
    private Collection $cantante_id;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Disco $disco_id = null;

    public function __construct()
    {
        $this->cantante_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDuracion(): ?\DateTimeInterface
    {
        return $this->duracion;
    }

    public function setDuracion(?\DateTimeInterface $duracion): self
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * @return Collection<int, Cantante>
     */
    public function getCantanteId(): Collection
    {
        return $this->cantante_id;
    }

    public function addCantanteId(Cantante $cantanteId): self
    {
        if (!$this->cantante_id->contains($cantanteId)) {
            $this->cantante_id->add($cantanteId);
        }

        return $this;
    }

    public function removeCantanteId(Cantante $cantanteId): self
    {
        $this->cantante_id->removeElement($cantanteId);

        return $this;
    }

    public function getDiscoId(): ?Disco
    {
        return $this->disco_id;
    }

    public function setDiscoId(?Disco $disco_id): self
    {
        $this->disco_id = $disco_id;

        return $this;
    }
}
