<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TbCategory extends \App\Entity\TbCategory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'parent_id', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'category_name', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'keyword', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'description', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'category_image', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'status', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'products', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'users'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'parent_id', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'category_name', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'keyword', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'description', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'category_image', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'status', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'products', '' . "\0" . 'App\\Entity\\TbCategory' . "\0" . 'users'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TbCategory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', []);

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentId(?int $parent_id): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', [$parent_id]);

        return parent::setParentId($parent_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryName', []);

        return parent::getCategoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryName(string $category_name): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryName', [$category_name]);

        return parent::setCategoryName($category_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', []);

        return parent::getKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeyword(string $keyword): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', [$keyword]);

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryImage', []);

        return parent::getCategoryImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryImage(?string $category_image): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryImage', [$category_image]);

        return parent::setCategoryImage($category_image);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeImmutable $updated_at): \App\Entity\TbCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducts($products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducts', [$products]);

        return parent::setProducts($products);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): ?\App\Entity\TbUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsers(?\App\Entity\TbUsers $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsers', [$users]);

        return parent::setUsers($users);
    }

}
