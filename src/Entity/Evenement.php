<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le titre doit contenir au moins 3 caractères.",
        maxMessage: "Le titre ne doit pas dépasser 255 caractères."
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        max: 2000,
        maxMessage: "La description ne peut pas dépasser 2000 caractères."
    )]
    private ?string $description = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La localisation est obligatoire.")]
    #[Assert\Length(
        max: 2000,
        maxMessage: "La localisation ne peut pas dépasser 2000 caractères."
    )]
    private ?string $localisation = null;


    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        max: 2000,
        maxMessage: "La contact ne peut pas dépasser 2000 caractères."
    )]
    private ?string $contact = null;

#[ORM\Column(length: 255)]
#[Assert\NotBlank(message: "La date de début est obligatoire.")]
#[Assert\Regex(
    pattern: "/^\d{4}-\d{2}-\d{2}$/",
    message: "Le format de la date doit être YYYY-MM-DD."
)]
    private ?string $date_debut = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    private ?int $recomponse = null;

    /**
     * @var Collection<int, Participant>
     */
    #[ORM\OneToMany(targetEntity: Participant::class, mappedBy: 'env')]
    private Collection $participants;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->date_debut;
    }

    public function setDateDebut(string $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getRecomponse(): ?int
    {
        return $this->recomponse;
    }

    public function setRecomponse(int $recomponse): static
    {
        $this->recomponse = $recomponse;

        return $this;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participant $participant): static
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->setEnv($this);
        }

        return $this;
    }

    public function removeParticipant(Participant $participant): static
    {
        if ($this->participants->removeElement($participant)) {
            // set the owning side to null (unless already changed)
            if ($participant->getEnv() === $this) {
                $participant->setEnv(null);
            }
        }

        return $this;
    }
}