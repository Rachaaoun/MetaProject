<?php

namespace ContainerQGayi6E;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb9b1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46b0d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties21f53 = [
        
    ];

    public function getConnection()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getConnection', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getMetadataFactory', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getExpressionBuilder', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'beginTransaction', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getCache', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'transactional', array('func' => $func), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'commit', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->commit();
    }

    public function rollback()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'rollback', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getClassMetadata', array('className' => $className), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'createQuery', array('dql' => $dql), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'createNamedQuery', array('name' => $name), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'createQueryBuilder', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'flush', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'clear', array('entityName' => $entityName), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->clear($entityName);
    }

    public function close()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'close', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->close();
    }

    public function persist($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'persist', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'remove', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'refresh', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'detach', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'merge', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'contains', array('entity' => $entity), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getEventManager', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getConfiguration', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'isOpen', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getUnitOfWork', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getProxyFactory', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'initializeObject', array('obj' => $obj), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'getFilters', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'isFiltersStateClean', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'hasFilters', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return $this->valueHolderfb9b1->hasFilters();
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

        $instance->initializer46b0d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfb9b1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb9b1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb9b1->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__get', ['name' => $name], $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        if (isset(self::$publicProperties21f53[$name])) {
            return $this->valueHolderfb9b1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb9b1;

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

        $targetObject = $this->valueHolderfb9b1;
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
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb9b1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb9b1;
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
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__isset', array('name' => $name), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb9b1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb9b1;
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
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__unset', array('name' => $name), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb9b1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb9b1;
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
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__clone', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        $this->valueHolderfb9b1 = clone $this->valueHolderfb9b1;
    }

    public function __sleep()
    {
        $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, '__sleep', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;

        return array('valueHolderfb9b1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46b0d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46b0d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46b0d && ($this->initializer46b0d->__invoke($valueHolderfb9b1, $this, 'initializeProxy', array(), $this->initializer46b0d) || 1) && $this->valueHolderfb9b1 = $valueHolderfb9b1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb9b1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb9b1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
