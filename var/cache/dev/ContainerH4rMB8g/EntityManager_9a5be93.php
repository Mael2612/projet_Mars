<?php

namespace ContainerH4rMB8g;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9fa01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerafdc2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40ab0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getConnection', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getMetadataFactory', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getExpressionBuilder', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'beginTransaction', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getCache', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getCache();
    }

    public function transactional($func)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'transactional', array('func' => $func), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'wrapInTransaction', array('func' => $func), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'commit', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->commit();
    }

    public function rollback()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'rollback', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getClassMetadata', array('className' => $className), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'createQuery', array('dql' => $dql), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'createNamedQuery', array('name' => $name), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'createQueryBuilder', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'flush', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'clear', array('entityName' => $entityName), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->clear($entityName);
    }

    public function close()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'close', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->close();
    }

    public function persist($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'persist', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'remove', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'refresh', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'detach', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'merge', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getRepository', array('entityName' => $entityName), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'contains', array('entity' => $entity), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getEventManager', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getConfiguration', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'isOpen', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getUnitOfWork', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getProxyFactory', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'initializeObject', array('obj' => $obj), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'getFilters', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'isFiltersStateClean', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'hasFilters', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return $this->valueHolder9fa01->hasFilters();
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

        $instance->initializerafdc2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9fa01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9fa01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9fa01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__get', ['name' => $name], $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        if (isset(self::$publicProperties40ab0[$name])) {
            return $this->valueHolder9fa01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa01;

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

        $targetObject = $this->valueHolder9fa01;
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
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9fa01;
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
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__isset', array('name' => $name), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9fa01;
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
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__unset', array('name' => $name), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9fa01;
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
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__clone', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        $this->valueHolder9fa01 = clone $this->valueHolder9fa01;
    }

    public function __sleep()
    {
        $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, '__sleep', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;

        return array('valueHolder9fa01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerafdc2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerafdc2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerafdc2 && ($this->initializerafdc2->__invoke($valueHolder9fa01, $this, 'initializeProxy', array(), $this->initializerafdc2) || 1) && $this->valueHolder9fa01 = $valueHolder9fa01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fa01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fa01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
