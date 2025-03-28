<?php

namespace App\Entity;

use App\Repository\MusicRepository;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints as Assert;
>>>>>>> 80fffa8 (ajout des fichiers)

#[ORM\Entity(repositoryClass: MusicRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Music
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

        #[ORM\Column]
        private ?\DateTimeImmutable $createdAt = null;

        #[ORM\Column]
        private ?\DateTimeImmutable $updatedAt = null;

        #[ORM\PrePersist]
        public function setCreatedAtValue(): void
        {
            if($this->createdAt==null){
                $this->createdAt = new \DateTimeImmutable();
            }
            if($this->updatedAt==null){
                $this->updatedAt = new \DateTimeImmutable();
            }
            
        }
=======
    #[Assert\NotBlank]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $url = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $author = null;

    #[ORM\PrePersist]
    public function setTimestampsValue(): void
    {
        if ($this->createdAt == null) {
            $this->createdAt = new \DateTimeImmutable();
        }
        $this->updatedAt = new \DateTimeImmutable();
    }
>>>>>>> 80fffa8 (ajout des fichiers)

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
<<<<<<< HEAD
}
=======

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): static
    {
        $this->author = $author;

        return $this;
    }
}
>>>>>>> 80fffa8 (ajout des fichiers)
