<?php

namespace App\Entity;

use App\Repository\CitaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitaRepository::class)]
class Cita
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Doctor $doctor_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Paciente $paciente_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hora = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoctorId(): ?Doctor
    {
        return $this->doctor_id;
    }

    public function setDoctorId(?Doctor $doctor_id): self
    {
        $this->doctor_id = $doctor_id;

        return $this;
    }

    public function getPacienteId(): ?Paciente
    {
        return $this->paciente_id;
    }

    public function setPacienteId(?Paciente $paciente_id): self
    {
        $this->paciente_id = $paciente_id;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }
}
