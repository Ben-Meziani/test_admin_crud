<?php

namespace ContainerHi10x7c;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder147f8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5dbc7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties39075 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getConnection', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getMetadataFactory', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getExpressionBuilder', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'beginTransaction', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getCache', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'transactional', array('func' => $func), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'commit', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->commit();
    }

    public function rollback()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'rollback', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getClassMetadata', array('className' => $className), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'createQuery', array('dql' => $dql), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'createNamedQuery', array('name' => $name), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'createQueryBuilder', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'flush', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'clear', array('entityName' => $entityName), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->clear($entityName);
    }

    public function close()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'close', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->close();
    }

    public function persist($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'persist', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'remove', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'refresh', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'detach', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'merge', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'contains', array('entity' => $entity), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getEventManager', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getConfiguration', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'isOpen', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getUnitOfWork', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getProxyFactory', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'initializeObject', array('obj' => $obj), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'getFilters', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'isFiltersStateClean', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'hasFilters', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return $this->valueHolder147f8->hasFilters();
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

        $instance->initializer5dbc7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder147f8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder147f8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder147f8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__get', ['name' => $name], $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        if (isset(self::$publicProperties39075[$name])) {
            return $this->valueHolder147f8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder147f8;

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

        $targetObject = $this->valueHolder147f8;
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
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder147f8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder147f8;
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
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__isset', array('name' => $name), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder147f8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder147f8;
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
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__unset', array('name' => $name), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder147f8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder147f8;
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
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__clone', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        $this->valueHolder147f8 = clone $this->valueHolder147f8;
    }

    public function __sleep()
    {
        $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, '__sleep', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;

        return array('valueHolder147f8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5dbc7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5dbc7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5dbc7 && ($this->initializer5dbc7->__invoke($valueHolder147f8, $this, 'initializeProxy', array(), $this->initializer5dbc7) || 1) && $this->valueHolder147f8 = $valueHolder147f8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder147f8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder147f8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
