<?php

namespace ContainerBkMXQxl;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHoldercba32 = null;
    private $initializerb3f20 = null;
    private static $publicProperties9bb51 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        if ($this->valueHoldercba32 === $returnValue = $this->valueHoldercba32->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializerb3f20 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHoldercba32) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldercba32 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerb3f20 && ($this->initializerb3f20->__invoke($valueHoldercba32, $this, '__get', ['name' => $name], $this->initializerb3f20) || 1) && $this->valueHoldercba32 = $valueHoldercba32;
        if (isset(self::$publicProperties9bb51[$name])) {
            return $this->valueHoldercba32->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
