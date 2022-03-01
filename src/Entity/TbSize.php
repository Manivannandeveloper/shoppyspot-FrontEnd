<?php

namespace App\Entity;

use App\Repository\TbSizeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbSizeRepository::class)
 */
class TbSize
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
    private $size_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $size_description;

    /**
     * @ORM\OneToMany(targetEntity="TbProducts", mappedBy="productSize")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSizeName(): ?string
    {
        return $this->size_name;
    }

    public function setSizeName(string $size_name): self
    {
        $this->size_name = $size_name;

        return $this;
    }

    public function getSizeDescription(): ?string
    {
        return $this->size_description;
    }

    public function setSizeDescription(?string $size_description): self
    {
        $this->size_description = $size_description;

        return $this;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */ 
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    public function __toString()
    {
        return $this->size_description;
    }

    public function addProduct(TbProducts $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setProductSize($this);
        }

        return $this;
    }

    public function removeProduct(TbProducts $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getProductSize() === $this) {
                $product->setProductSize(null);
            }
        }

        return $this;
    }
}
