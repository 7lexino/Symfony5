<?php

namespace App\Entity;

use App\Repository\NoticiaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoticiaRepository::class)
 */
class Noticia
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
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $extracto;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $contenido;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_publicacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img_destacada;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $palabras_clave;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, inversedBy="noticias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $propietario;

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

    public function getExtracto(): ?string
    {
        return $this->extracto;
    }

    public function setExtracto(string $extracto): self
    {
        $this->extracto = $extracto;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(string $contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(\DateTimeInterface $fecha_publicacion): self
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    public function getImgDestacada(): ?string
    {
        return $this->img_destacada;
    }

    public function setImgDestacada(?string $img_destacada): self
    {
        $this->img_destacada = $img_destacada;

        return $this;
    }

    public function getPalabrasClave(): ?string
    {
        return $this->palabras_clave;
    }

    public function setPalabrasClave(?string $palabras_clave): self
    {
        $this->palabras_clave = $palabras_clave;

        return $this;
    }

    public function getPropietario(): ?Usuario
    {
        return $this->propietario;
    }

    public function setPropietario(?Usuario $propietario): self
    {
        $this->propietario = $propietario;

        return $this;
    }
}
