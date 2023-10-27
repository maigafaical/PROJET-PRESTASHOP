<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder44f2e = null;
    private $initializerddfec = null;
    private static $publicPropertiesd5a85 = [
        
    ];
    public function getConnection()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getConnection', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getMetadataFactory', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getExpressionBuilder', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'beginTransaction', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getCache', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'transactional', array('func' => $func), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'commit', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->commit();
    }
    public function rollback()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'rollback', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getClassMetadata', array('className' => $className), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'createQuery', array('dql' => $dql), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'createNamedQuery', array('name' => $name), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'createQueryBuilder', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'flush', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'clear', array('entityName' => $entityName), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->clear($entityName);
    }
    public function close()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'close', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->close();
    }
    public function persist($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'persist', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'remove', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'refresh', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'detach', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'merge', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'contains', array('entity' => $entity), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getEventManager', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getConfiguration', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'isOpen', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getUnitOfWork', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getProxyFactory', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'initializeObject', array('obj' => $obj), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'getFilters', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'isFiltersStateClean', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'hasFilters', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return $this->valueHolder44f2e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerddfec = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder44f2e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44f2e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder44f2e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__get', ['name' => $name], $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        if (isset(self::$publicPropertiesd5a85[$name])) {
            return $this->valueHolder44f2e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44f2e;
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
        $targetObject = $this->valueHolder44f2e;
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
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44f2e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder44f2e;
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
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__isset', array('name' => $name), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44f2e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder44f2e;
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
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__unset', array('name' => $name), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44f2e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder44f2e;
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
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__clone', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        $this->valueHolder44f2e = clone $this->valueHolder44f2e;
    }
    public function __sleep()
    {
        $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, '__sleep', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
        return array('valueHolder44f2e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerddfec = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerddfec;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerddfec && ($this->initializerddfec->__invoke($valueHolder44f2e, $this, 'initializeProxy', array(), $this->initializerddfec) || 1) && $this->valueHolder44f2e = $valueHolder44f2e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44f2e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44f2e;
    }
}
