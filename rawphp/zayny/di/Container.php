<?php

namespace zayny\di;

/**
 * A Dependency Injector Container.
 *
 * @author Sidney Lins <slinstj at gmail.com>
 */
class Container
{
    protected $_registers;

    public function set($className, callable $callable)
    {
        $this->_registers[$className] = $callable;
    }

    public function get($className)
    {
        return call_user_func($this->_registers[$className], $this);
    }
}

