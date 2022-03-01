<?php

namespace ContainerPfIqlGp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder41931 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8a9b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa37c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getConnection', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getMetadataFactory', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getExpressionBuilder', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'beginTransaction', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getCache', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'transactional', array('func' => $func), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'commit', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->commit();
    }

    public function rollback()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'rollback', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'createQuery', array('dql' => $dql), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'createQueryBuilder', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'flush', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'clear', array('entityName' => $entityName), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'close', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->close();
    }

    public function persist($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'persist', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'remove', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'refresh', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'detach', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'merge', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'contains', array('entity' => $entity), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getEventManager', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getConfiguration', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'isOpen', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getUnitOfWork', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getProxyFactory', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'getFilters', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'isFiltersStateClean', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'hasFilters', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return $this->valueHolder41931->hasFilters();
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

        $instance->initializerb8a9b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder41931) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder41931 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder41931->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__get', ['name' => $name], $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        if (isset(self::$publicPropertiesa37c6[$name])) {
            return $this->valueHolder41931->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41931;

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

        $targetObject = $this->valueHolder41931;
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
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41931;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder41931;
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
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__isset', array('name' => $name), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41931;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder41931;
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
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__unset', array('name' => $name), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41931;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder41931;
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
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__clone', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        $this->valueHolder41931 = clone $this->valueHolder41931;
    }

    public function __sleep()
    {
        $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, '__sleep', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;

        return array('valueHolder41931');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8a9b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8a9b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8a9b && ($this->initializerb8a9b->__invoke($valueHolder41931, $this, 'initializeProxy', array(), $this->initializerb8a9b) || 1) && $this->valueHolder41931 = $valueHolder41931;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41931;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41931;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}