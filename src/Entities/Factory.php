<?php

namespace Dhritiman\MailchimpStore\Entities;

use Dhritiman\MailchimpStore\Entities\Product;

class Factory
{   
    protected $namespace;

    public function __construct()
    {
        $this->namespace = __NAMESPACE__;
    }

    public function make($input)
    {   
        $name = $this->getClassName($input);
        $class = $this->namespace.'\\'.$name;
        return new $class();
    }
    
    protected function getClassName($input)
    {
        return ucfirst($input);
    }
}