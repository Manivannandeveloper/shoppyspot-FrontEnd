<?php

namespace App\Entity;

use App\Repository\TbColorsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbColorsRepository::class)
 */
class TbColors
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
    private $color_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color_desc;

    /**
     * @ORM\OneToMany(targetEntity="TbProducts", mappedBy="productColor")
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

    public function getColorName(): ?string
    {
        return $this->color_name;
    }

    public function setColorName(string $color_name): self
    {
        $this->color_name = $color_name;

        return $this;
    }

    public function getColorCode(): ?string
    {
        return $this->color_code;
    }

    public function setColorCode(?string $color_code): self
    {
        $this->color_code = $color_code;

        return $this;
    }

    public function getColorDesc(): ?string
    {
        return $this->color_desc;
    }

    public function setColorDesc(?string $color_desc): self
    {
        $this->color_desc = $color_desc;

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
        return $this->color_name;
    }

    public function addProduct(TbProducts $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setProductColor($this);
        }

        return $this;
    }

    public function removeProduct(TbProducts $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getProductColor() === $this) {
                $product->setProductColor(null);
            }
        }

        return $this;
    }
}
