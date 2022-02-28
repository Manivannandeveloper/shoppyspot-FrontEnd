<?php

namespace Container9WGFz9m;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7814 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73ae3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties48899 = [
        
    ];

    public function getConnection()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getConnection', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getMetadataFactory', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getExpressionBuilder', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'beginTransaction', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getCache', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'transactional', array('func' => $func), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'wrapInTransaction', array('func' => $func), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'commit', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->commit();
    }

    public function rollback()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'rollback', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getClassMetadata', array('className' => $className), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'createQuery', array('dql' => $dql), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'createNamedQuery', array('name' => $name), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'createQueryBuilder', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'flush', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'clear', array('entityName' => $entityName), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->clear($entityName);
    }

    public function close()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'close', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->close();
    }

    public function persist($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'persist', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'remove', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'refresh', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'detach', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'merge', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'contains', array('entity' => $entity), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getEventManager', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getConfiguration', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'isOpen', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getUnitOfWork', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getProxyFactory', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'initializeObject', array('obj' => $obj), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'getFilters', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'isFiltersStateClean', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'hasFilters', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return $this->valueHolderf7814->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer73ae3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf7814) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7814 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf7814->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__get', ['name' => $name], $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        if (isset(self::$publicProperties48899[$name])) {
            return $this->valueHolderf7814->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7814;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7814;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7814;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7814;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__isset', array('name' => $name), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7814;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7814;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__unset', array('name' => $name), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7814;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7814;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__clone', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        $this->valueHolderf7814 = clone $this->valueHolderf7814;
    }

    public function __sleep()
    {
        $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, '__sleep', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;

        return array('valueHolderf7814');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer73ae3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73ae3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73ae3 && ($this->initializer73ae3->__invoke($valueHolderf7814, $this, 'initializeProxy', array(), $this->initializer73ae3) || 1) && $this->valueHolderf7814 = $valueHolderf7814;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7814;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7814;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
