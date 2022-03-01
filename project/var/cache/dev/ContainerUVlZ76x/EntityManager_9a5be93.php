<?php

namespace ContainerUVlZ76x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7bcf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer785b7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15aef = [
        
    ];

    public function getConnection()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getConnection', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getMetadataFactory', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getExpressionBuilder', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'beginTransaction', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getCache', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'transactional', array('func' => $func), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'commit', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->commit();
    }

    public function rollback()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'rollback', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getClassMetadata', array('className' => $className), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'createQuery', array('dql' => $dql), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'createNamedQuery', array('name' => $name), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'createQueryBuilder', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'flush', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'clear', array('entityName' => $entityName), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->clear($entityName);
    }

    public function close()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'close', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->close();
    }

    public function persist($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'persist', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'remove', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'refresh', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'detach', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'merge', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'contains', array('entity' => $entity), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getEventManager', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getConfiguration', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'isOpen', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getUnitOfWork', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getProxyFactory', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'initializeObject', array('obj' => $obj), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'getFilters', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'isFiltersStateClean', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'hasFilters', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return $this->valueHoldera7bcf->hasFilters();
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

        $instance->initializer785b7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7bcf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7bcf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7bcf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__get', ['name' => $name], $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        if (isset(self::$publicProperties15aef[$name])) {
            return $this->valueHoldera7bcf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7bcf;

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

        $targetObject = $this->valueHoldera7bcf;
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
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7bcf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7bcf;
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
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__isset', array('name' => $name), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7bcf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7bcf;
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
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__unset', array('name' => $name), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7bcf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7bcf;
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
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__clone', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        $this->valueHoldera7bcf = clone $this->valueHoldera7bcf;
    }

    public function __sleep()
    {
        $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, '__sleep', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;

        return array('valueHoldera7bcf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer785b7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer785b7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer785b7 && ($this->initializer785b7->__invoke($valueHoldera7bcf, $this, 'initializeProxy', array(), $this->initializer785b7) || 1) && $this->valueHoldera7bcf = $valueHoldera7bcf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7bcf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7bcf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
