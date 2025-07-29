<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder93d7c = null;
    private $initializer13cc5 = null;
    private static $publicProperties6f4f3 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getList', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getInstalledModules', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getMustBeConfiguredModules', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getUpgradableModules', array(), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'setActionUrls', array('collection' => $collection), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        return $this->valueHolder93d7c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer13cc5 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder93d7c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder93d7c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder93d7c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer13cc5 && ($this->initializer13cc5->__invoke($valueHolder93d7c, $this, '__get', ['name' => $name], $this->initializer13cc5) || 1) && $this->valueHolder93d7c = $valueHolder93d7c;
        if (isset(self::$publicProperties6f4f3[$name])) {
            return $this->valueHolder93d7c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
