<?php

namespace ContainerW2qx1V8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9f17 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdfa1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties150ca = [
        
    ];

    public function getConnection()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getConnection', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getMetadataFactory', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getExpressionBuilder', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'beginTransaction', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getCache', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'transactional', array('func' => $func), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'commit', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->commit();
    }

    public function rollback()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'rollback', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getClassMetadata', array('className' => $className), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'createQuery', array('dql' => $dql), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'createNamedQuery', array('name' => $name), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'createQueryBuilder', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'flush', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'clear', array('entityName' => $entityName), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->clear($entityName);
    }

    public function close()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'close', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->close();
    }

    public function persist($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'persist', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'remove', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'refresh', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'detach', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'merge', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'contains', array('entity' => $entity), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getEventManager', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getConfiguration', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'isOpen', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getUnitOfWork', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getProxyFactory', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'initializeObject', array('obj' => $obj), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'getFilters', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'isFiltersStateClean', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'hasFilters', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return $this->valueHoldera9f17->hasFilters();
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

        $instance->initializerdfa1b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera9f17) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9f17 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9f17->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__get', ['name' => $name], $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        if (isset(self::$publicProperties150ca[$name])) {
            return $this->valueHoldera9f17->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9f17;

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

        $targetObject = $this->valueHoldera9f17;
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
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9f17;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera9f17;
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
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__isset', array('name' => $name), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9f17;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera9f17;
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
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__unset', array('name' => $name), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9f17;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera9f17;
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
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__clone', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        $this->valueHoldera9f17 = clone $this->valueHoldera9f17;
    }

    public function __sleep()
    {
        $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, '__sleep', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;

        return array('valueHoldera9f17');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdfa1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdfa1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdfa1b && ($this->initializerdfa1b->__invoke($valueHoldera9f17, $this, 'initializeProxy', array(), $this->initializerdfa1b) || 1) && $this->valueHoldera9f17 = $valueHoldera9f17;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9f17;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9f17;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
