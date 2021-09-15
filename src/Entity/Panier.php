<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;


/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 * @ApiResource(
 *     normalizationContext={
 *         "groups"={"panier"}
 *     },
 * )
 * 
 * @ApiFilter(SearchFilter::class, properties={"user": "exact"})
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"panier"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"panier"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"panier"})
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"panier"})
     */
    private $size;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getProduct(): ?product
    {
        return $this->product;
    }

    public function setProduct(?product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }
}
