<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ApiResource(
 *     collectionOperations={
 *          "get"={
 *          "method"="GET",
 *          "normalization_context"={"groups"={"users_read"}}
 *          },
 *          "post"
 *     },
 *     itemOperations={
 *          "get"={
 *          "method"="GET",
 *          "normalization_context"={"groups"={"user_read"}}
 *          },
 *          "put",
 *          "delete"
 *     }
 * )
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"users_read", "user_read"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users_read", "user_read"})
     * @Assert\NotBlank(message="Firstname is required!")
     * @Assert\Length(min=3, max=255, minMessage="The user's firstname must be at least 3 characters long.")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users_read", "user_read"})
     * @Assert\NotBlank(message="Lastname is required!")
     * @Assert\Length(min=3, max=255, minMessage="The user's lastename must be at least 3 characters long.")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users_read", "user_read"})
     * @Assert\Email(message= "The email '{{ value }}' is not a valid email.")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_read")
     * @Assert\NotBlank(message="Phone is required!")
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_read")
     * @Assert\NotBlank(message="Address is required!")
     * @Assert\Length(min=3, max=255, minMessage="The user's name must be at least 3 characters long.")
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_read")
     * @Assert\NotBlank(message="Zip is required!")
     */
    private $zip;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_read")
     * @Assert\NotBlank(message="Town is required!")
     * @Assert\Length(min=3, max=255, minMessage="The town must be at least 3 characters long.")
     */
    private $town;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_read")
     * @Assert\NotBlank(message="Country is required!")
     * @Assert\Length(min=2, max=255, minMessage="The country must be at least 3 characters long.")
     */
    private $country;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdDate;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedDate;

    public function __construct()
    {
        $this->createdDate = new DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCreatedDate(): ?DateTimeImmutable
    {
        return $this->createdDate;
    }

    public function setCreatedDate(DateTimeImmutable $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getUpdatedDate(): ?DateTimeImmutable
    {
        return $this->updatedDate;
    }

    public function setUpdatedDate(?DateTimeImmutable $updatedDate): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }
}
