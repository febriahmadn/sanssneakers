<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder93d7c = null;
    private $initializer13cc5 = null;
    private static $publicProperties6f4f3 = [
        
    ];
    public function getConnection()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getConnection', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getMetadataFactory', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getExpressionBuilder', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'beginTransaction', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getCache', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'transactional', array('func' => $func), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'commit', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->commit();
    }
    public function rollback()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'rollback', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getClassMetadata', array('className' => $className), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'createQuery', array('dql' => $dql), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'createNamedQuery', array('name' => $name), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'createQueryBuilder', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'flush', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'clear', array('entityName' => $entityName), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->clear($entityName);
    }
    public function close()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'close', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->close();
    }
    public function persist($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'persist', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'remove', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'refresh', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'detach', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'merge', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'contains', array('entity' => $entity), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getEventManager', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getConfiguration', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'isOpen', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getUnitOfWork', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getProxyFactory', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'initializeObject', array('obj' => $obj), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getFilters', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'isFiltersStateClean', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'hasFilters', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer13cc5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder93d7c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93d7c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder93d7c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__get', ['name' => $name], $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        if (isset(self::$publicProperties6f4f3[$name])) {
            return $this->valueHolder93d7c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93d7c;
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
        $targetObject = $this->valueHolder93d7c;
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
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93d7c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder93d7c;
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
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__isset', array('name' => $name), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93d7c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder93d7c;
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
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__unset', array('name' => $name), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93d7c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder93d7c;
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
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__clone', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        $this->valueHolder93d7c = clone $this->valueHolder93d7c;
    }
    public function __sleep()
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__sleep', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return array('valueHolder93d7c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13cc5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13cc5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'initializeProxy', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93d7c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93d7c;
    }
}
