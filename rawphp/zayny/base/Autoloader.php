<?php

namespace zayny\base;

class Autoloader
{
    public $prefixes = [];

    public function __construct()
    {
        spl_autoload_register([$this, 'loadClass']);
    }

    public function addNamespace($prefix, $baseDir, $prepend = false)
    {
        $prefix = trim($prefix, '\\') . '\\';
        $baseDir = rtrim($baseDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

        if(isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = [];
        }

        if($prepend){
            array_unshift($this->prefixes[$prefix], $baseDir);
        } else {
            array_push($this->prefixes[$prefix], $baseDir);
        }
    }

    public function loadClass($fullyQualifiedClassName)
    {
        $prefix = $fullyQualifiedClassName;

        while(($pos = strrpos($prefix, '\\')) !== false) {
            $prefix = substr($fullyQualifiedClassName, 0, $pos + 1);
            $relativeClass = substr($fullyQualifiedClassName, $pos + 1);
            $mappedFile = $this->loadMappedFile($prefix, $relativeClass);
            if ($mappedFile) {
                return $mappedFile;
            }
            $prefix = rtrim($prefix, '\\');
        }
    }

    protected function loadMappedFile($prefix, $relativeClass)
    {
        if (isset($this->prefixes[$prefix]) === false) {
            return false;
        }
        foreach ($this->prefixes[$prefix] as $baseDir) {
            $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';
        }
        if ($this->requireFile($file)){
            return $file;
        }
        return false;
    }

    protected function requireFile($file)
    {
        if (file_exists($file)) {
            require_once $file;
            return true;
        }
        return false;
    }
}
