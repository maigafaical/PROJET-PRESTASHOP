<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder87148 = null;
    private $initializer41805 = null;
    private static $publicProperties3aded = [
        
    ];
    public function getConnection()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getConnection', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getMetadataFactory', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getExpressionBuilder', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'beginTransaction', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getCache', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getCache();
    }
    public function transactional($func)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'transactional', array('func' => $func), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'wrapInTransaction', array('func' => $func), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'commit', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->commit();
    }
    public function rollback()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'rollback', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getClassMetadata', array('className' => $className), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'createQuery', array('dql' => $dql), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'createNamedQuery', array('name' => $name), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'createQueryBuilder', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'flush', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'clear', array('entityName' => $entityName), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->clear($entityName);
    }
    public function close()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'close', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->close();
    }
    public function persist($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'persist', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'remove', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'refresh', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'detach', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'merge', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'contains', array('entity' => $entity), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getEventManager', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getConfiguration', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'isOpen', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getUnitOfWork', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getProxyFactory', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'initializeObject', array('obj' => $obj), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'getFilters', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'isFiltersStateClean', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'hasFilters', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return $this->valueHolder87148->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer41805 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder87148) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder87148 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder87148->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__get', ['name' => $name], $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        if (isset(self::$publicProperties3aded[$name])) {
            return $this->valueHolder87148->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87148;
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
        $targetObject = $this->valueHolder87148;
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
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87148;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder87148;
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
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__isset', array('name' => $name), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87148;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder87148;
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
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__unset', array('name' => $name), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87148;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder87148;
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
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__clone', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        $this->valueHolder87148 = clone $this->valueHolder87148;
    }
    public function __sleep()
    {
        $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, '__sleep', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
        return array('valueHolder87148');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41805 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41805;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer41805 && ($this->initializer41805->__invoke($valueHolder87148, $this, 'initializeProxy', array(), $this->initializer41805) || 1) && $this->valueHolder87148 = $valueHolder87148;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87148;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87148;
    }
}
