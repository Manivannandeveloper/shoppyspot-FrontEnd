<?php

namespace App\Entity;

use App\Repository\TbProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbProductsRepository::class)
 */
class TbProducts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keyword;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $product_desc;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $product_price;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $product_details;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_status;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="TbCategory", inversedBy="products")
     */
    private $category;
    
    /**
     * @ORM\ManyToOne(targetEntity="TbUsers", inversedBy="products")
     */
    private $users;
    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getProductTitle(): ?string
    {
        return $this->product_title;
    }

    public function setProductTitle(string $product_title): self
    {
        $this->product_title = $product_title;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getProductDesc(): ?string
    {
        return $this->product_desc;
    }

    public function setProductDesc(?string $product_desc): self
    {
        $this->product_desc = $product_desc;

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

    public function getProductPrice(): ?float
    {
        return $this->product_price;
    }

    public function setProductPrice(?float $product_price): self
    {
        $this->product_price = $product_price;

        return $this;
    }

    public function getProductDetails(): ?string
    {
        return $this->product_details;
    }

    public function setProductDetails(?string $product_details): self
    {
        $this->product_details = $product_details;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getProductStatus(): ?int
    {
        return $this->product_status;
    }

    public function setProductStatus(int $product_status): self
    {
        $this->product_status = $product_status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of users
     */ 
    public function getUsers(): ? TbUsers
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function setUsers(?TbUsers $users): self
    {
        $this->users = $users;

        return $this;
    }
}
