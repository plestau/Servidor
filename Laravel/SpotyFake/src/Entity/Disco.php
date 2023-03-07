<?php

namespace App\Entity;

use App\Repository\DiscoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscoRepository::class)]
class Disco
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_lanzamiento = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cantante $cantante_id = null;

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

    public function getFechaLanzamiento(): ?\DateTimeInterface
    {
        return $this->fecha_lanzamiento;
    }

    public function setFechaLanzamiento(?\DateTimeInterface $fecha_lanzamiento): self
    {
        $this->fecha_lanzamiento = $fecha_lanzamiento;

        return $this;
    }

    public function getCantanteId(): ?Cantante
    {
        return $this->cantante_id;
    }

    public function setCantanteId(?Cantante $cantante_id): self
    {
        $this->cantante_id = $cantante_id;

        return $this;
    }
}
