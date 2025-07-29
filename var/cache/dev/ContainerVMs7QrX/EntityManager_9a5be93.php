<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3eb1a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8ef45 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescaaa3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getConnection', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getMetadataFactory', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getExpressionBuilder', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'beginTransaction', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getCache', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'transactional', array('func' => $func), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'commit', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->commit();
    }

    public function rollback()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'rollback', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getClassMetadata', array('className' => $className), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'createQuery', array('dql' => $dql), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'createNamedQuery', array('name' => $name), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'createQueryBuilder', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'flush', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'clear', array('entityName' => $entityName), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->clear($entityName);
    }

    public function close()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'close', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->close();
    }

    public function persist($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'persist', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'remove', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'refresh', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'detach', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'merge', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'contains', array('entity' => $entity), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getEventManager', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getConfiguration', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'isOpen', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getUnitOfWork', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getProxyFactory', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'initializeObject', array('obj' => $obj), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getFilters', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'isFiltersStateClean', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'hasFilters', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->hasFilters();
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

        $instance->initializer8ef45 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3eb1a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3eb1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3eb1a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__get', ['name' => $name], $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        if (isset(self::$publicPropertiescaaa3[$name])) {
            return $this->valueHolder3eb1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eb1a;

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

        $targetObject = $this->valueHolder3eb1a;
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
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eb1a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3eb1a;
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
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__isset', array('name' => $name), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eb1a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3eb1a;
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
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__unset', array('name' => $name), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3eb1a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3eb1a;
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
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__clone', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        $this->valueHolder3eb1a = clone $this->valueHolder3eb1a;
    }

    public function __sleep()
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__sleep', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return array('valueHolder3eb1a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8ef45 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8ef45;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'initializeProxy', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3eb1a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3eb1a;
    }
}
