<?php

namespace ContainerLMbeHe8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5c16a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58d3c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89bc9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getConnection', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getMetadataFactory', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getExpressionBuilder', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'beginTransaction', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getCache', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'transactional', array('func' => $func), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'commit', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->commit();
    }

    public function rollback()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'rollback', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getClassMetadata', array('className' => $className), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'createQuery', array('dql' => $dql), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'createNamedQuery', array('name' => $name), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'createQueryBuilder', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'flush', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'clear', array('entityName' => $entityName), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->clear($entityName);
    }

    public function close()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'close', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->close();
    }

    public function persist($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'persist', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'remove', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'refresh', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'detach', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'merge', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'contains', array('entity' => $entity), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getEventManager', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getConfiguration', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'isOpen', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getUnitOfWork', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getProxyFactory', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'initializeObject', array('obj' => $obj), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'getFilters', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'isFiltersStateClean', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'hasFilters', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return $this->valueHolder5c16a->hasFilters();
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

        $instance->initializer58d3c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5c16a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c16a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5c16a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__get', ['name' => $name], $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        if (isset(self::$publicProperties89bc9[$name])) {
            return $this->valueHolder5c16a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c16a;

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

        $targetObject = $this->valueHolder5c16a;
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
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c16a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5c16a;
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
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__isset', array('name' => $name), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c16a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5c16a;
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
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__unset', array('name' => $name), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c16a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5c16a;
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
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__clone', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        $this->valueHolder5c16a = clone $this->valueHolder5c16a;
    }

    public function __sleep()
    {
        $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, '__sleep', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;

        return array('valueHolder5c16a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58d3c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58d3c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58d3c && ($this->initializer58d3c->__invoke($valueHolder5c16a, $this, 'initializeProxy', array(), $this->initializer58d3c) || 1) && $this->valueHolder5c16a = $valueHolder5c16a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c16a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c16a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
