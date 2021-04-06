<?php

namespace ContainerGaPqk0x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e05a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1c3f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb5dda = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getConnection', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getMetadataFactory', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getExpressionBuilder', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'beginTransaction', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getCache', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'transactional', array('func' => $func), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->transactional($func);
    }

    public function commit()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'commit', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->commit();
    }

    public function rollback()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'rollback', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'createQuery', array('dql' => $dql), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'createQueryBuilder', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'flush', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'clear', array('entityName' => $entityName), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'close', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->close();
    }

    public function persist($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'persist', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'remove', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'refresh', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'detach', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'merge', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'contains', array('entity' => $entity), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getEventManager', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getConfiguration', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'isOpen', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getUnitOfWork', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getProxyFactory', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'getFilters', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'isFiltersStateClean', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'hasFilters', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return $this->valueHolder7e05a->hasFilters();
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

        $instance->initializerb1c3f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e05a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e05a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e05a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__get', ['name' => $name], $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        if (isset(self::$publicPropertiesb5dda[$name])) {
            return $this->valueHolder7e05a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e05a;

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

        $targetObject = $this->valueHolder7e05a;
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
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e05a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e05a;
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
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__isset', array('name' => $name), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e05a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e05a;
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
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__unset', array('name' => $name), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e05a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e05a;
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
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__clone', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        $this->valueHolder7e05a = clone $this->valueHolder7e05a;
    }

    public function __sleep()
    {
        $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, '__sleep', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;

        return array('valueHolder7e05a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1c3f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1c3f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1c3f && ($this->initializerb1c3f->__invoke($valueHolder7e05a, $this, 'initializeProxy', array(), $this->initializerb1c3f) || 1) && $this->valueHolder7e05a = $valueHolder7e05a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e05a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e05a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
