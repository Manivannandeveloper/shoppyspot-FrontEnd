<?php

namespace App\Entity;

use App\Repository\TbProductsRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=TbProductsRepository::class)
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     */
    private $imageFiles;

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
    private $product_type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $product_discount;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_instoct;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $product_quantity;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_status;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="TbCategory", inversedBy="products")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="TbSize", inversedBy="products")
     */
    private $productSize;

     /**
     * @ORM\ManyToOne(targetEntity="TbColors", inversedBy="products")
     */
    private $productColor;
    

    
    /**
     * @ORM\ManyToOne(targetEntity="TbUsers", inversedBy="products")
     */
    private $users;
    
    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }


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
        return $this->product_type;
    }

    public function setType(?string $product_type): self
    {
        $this->product_type = $product_type;

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

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTime $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTime $updated_at): self
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

    public function toString()
    {
        return $this->product_title;
    }

    /**
     * Get the value of imageFiles
     */ 
    public function getImageFiles()
    {
        return $this->imageFiles;
    }

    /**
     * Set the value of imageFiles
     *
     * @return  self
     */ 
    public function setImageFiles(?File $image = null)
    {
        $this->imageFiles = $image;

        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getProductType(): ?string
    {
        return $this->product_type;
    }

    public function setProductType(?string $product_type): self
    {
        $this->product_type = $product_type;

        return $this;
    }

    /**
     * Get the value of productSize
     */ 
    public function getProductSize() 
    {
        return $this->productSize;
    }

    /**
     * Set the value of productSize
     *
     * @return  self
     */ 
    public function setProductSize($productSize)
    {
        $this->productSize = $productSize;

        return $this;
    }

    /**
     * Get the value of productColor
     */ 
    public function getProductColor()
    {
        return $this->productColor;
    }

    /**
     * Set the value of productColor
     *
     * @return  self
     */ 
    public function setProductColor($productColor)
    {
        $this->productColor = $productColor;

        return $this;
    }

    /**
     * Get the value of product_discount
     */ 
    public function getProduct_discount()
    {
        return $this->product_discount;
    }

    /**
     * Set the value of product_discount
     *
     * @return  self
     */ 
    public function setProduct_discount($product_discount)
    {
        $this->product_discount = $product_discount;

        return $this;
    }

    /**
     * Get the value of product_instoct
     */ 
    public function getProduct_instoct(): ?int
    {
        return $this->product_instoct;
    }

    /**
     * Set the value of product_instoct
     *
     * @return  self
     */ 
    public function setProduct_instoct(int $product_instoct): self
    {
        $this->product_instoct = $product_instoct;

        return $this;
    }

    /**
     * Get the value of product_quantity
     */ 
    public function getProduct_quantity()
    {
        return $this->product_quantity;
    }

    /**
     * Set the value of product_quantity
     *
     * @return  self
     */ 
    public function setProduct_quantity($product_quantity)
    {
        $this->product_quantity = $product_quantity;

        return $this;
    }

    public function getProductDiscount(): ?string
    {
        return $this->product_discount;
    }

    public function setProductDiscount(?string $product_discount): self
    {
        $this->product_discount = $product_discount;

        return $this;
    }

    public function getProductInstoct(): ?int
    {
        return $this->product_instoct;
    }

    public function setProductInstoct(int $product_instoct): self
    {
        $this->product_instoct = $product_instoct;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->product_quantity;
    }

    public function setProductQuantity(?int $product_quantity): self
    {
        $this->product_quantity = $product_quantity;

        return $this;
    }
}
