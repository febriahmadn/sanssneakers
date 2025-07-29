<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
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

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getList', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getInstalledModules', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getMustBeConfiguredModules', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getUpgradableModules', array(), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'setActionUrls', array('collection' => $collection), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        return $this->valueHolder3eb1a->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer8ef45 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder3eb1a) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder3eb1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder3eb1a->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer8ef45 && ($this->initializer8ef45->__invoke($valueHolder3eb1a, $this, '__get', ['name' => $name], $this->initializer8ef45) || 1) && $this->valueHolder3eb1a = $valueHolder3eb1a;

        if (isset(self::$publicPropertiescaaa3[$name])) {
            return $this->valueHolder3eb1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
