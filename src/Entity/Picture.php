<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
#[ORM\Table(name:'picture')]
class Picture
{
    #[ORM\Id, ORM\Column(type: 'id', unique: true)]
    protected ORM\Id $id;

    #[ORM\Column(nullable : true)]
    protected string $title;

    #[ORM\Column(nullable : true)]
    protected string $explanation;

    #[ORM\Column(nullable : true)]
    protected string $date;

    #[ORM\Column(nullable : true)]
    protected string $image;

    public function getId(): ORM\Id
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    public function setExplanation(?string $explanation): self
    {
        $this->explanation = $explanation;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
