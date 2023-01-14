<?php

namespace ContainerBkMXQxl;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercba32 = null;
    private $initializerb3f20 = null;
    private static $publicProperties9bb51 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getConnection', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getMetadataFactory', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getExpressionBuilder', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'beginTransaction', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getCache', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'transactional', array('func' => $func), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'commit', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->commit();
    }
    public function rollback()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'rollback', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'createQuery', array('dql' => $dql), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'createQueryBuilder', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'flush', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'clear', array('entityName' => $entityName), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->clear($entityName);
    }
    public function close()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'close', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->close();
    }
    public function persist($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'persist', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'remove', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'refresh', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'detach', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'merge', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'contains', array('entity' => $entity), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getEventManager', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getConfiguration', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'isOpen', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getUnitOfWork', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getProxyFactory', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'getFilters', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'isFiltersStateClean', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'hasFilters', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return $this->valueHoldercba32->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb3f20 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHoldercba32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercba32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldercba32->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__get', ['name' => $name], $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        if (isset(self::$publicProperties9bb51[$name])) {
            return $this->valueHoldercba32->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercba32;
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
        $targetObject = $this->valueHoldercba32;
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
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercba32;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldercba32;
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
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__isset', array('name' => $name), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercba32;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldercba32;
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
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__unset', array('name' => $name), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercba32;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercba32;
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
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__clone', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        $this->valueHoldercba32 = clone $this->valueHoldercba32;
    }
    public function __sleep()
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__sleep', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        return array('valueHoldercba32');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3f20 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3f20;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'initializeProxy', array(), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercba32;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercba32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
