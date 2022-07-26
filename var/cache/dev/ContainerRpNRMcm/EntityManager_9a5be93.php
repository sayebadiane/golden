<?php

namespace ContainerRpNRMcm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23943 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer01603 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8cdc1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getConnection', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getMetadataFactory', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getExpressionBuilder', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'beginTransaction', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getCache', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getCache();
    }

    public function transactional($func)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'transactional', array('func' => $func), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'wrapInTransaction', array('func' => $func), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'commit', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->commit();
    }

    public function rollback()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'rollback', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getClassMetadata', array('className' => $className), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'createQuery', array('dql' => $dql), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'createNamedQuery', array('name' => $name), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'createQueryBuilder', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'flush', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'clear', array('entityName' => $entityName), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->clear($entityName);
    }

    public function close()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'close', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->close();
    }

    public function persist($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'persist', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'remove', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'refresh', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'detach', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'merge', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getRepository', array('entityName' => $entityName), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'contains', array('entity' => $entity), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getEventManager', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getConfiguration', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'isOpen', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getUnitOfWork', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getProxyFactory', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'initializeObject', array('obj' => $obj), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'getFilters', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'isFiltersStateClean', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'hasFilters', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return $this->valueHolder23943->hasFilters();
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

        $instance->initializer01603 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder23943) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23943 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23943->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__get', ['name' => $name], $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        if (isset(self::$publicProperties8cdc1[$name])) {
            return $this->valueHolder23943->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23943;

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

        $targetObject = $this->valueHolder23943;
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
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23943;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23943;
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
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__isset', array('name' => $name), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23943;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23943;
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
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__unset', array('name' => $name), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23943;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23943;
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
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__clone', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        $this->valueHolder23943 = clone $this->valueHolder23943;
    }

    public function __sleep()
    {
        $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, '__sleep', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;

        return array('valueHolder23943');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer01603 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer01603;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer01603 && ($this->initializer01603->__invoke($valueHolder23943, $this, 'initializeProxy', array(), $this->initializer01603) || 1) && $this->valueHolder23943 = $valueHolder23943;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23943;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23943;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
