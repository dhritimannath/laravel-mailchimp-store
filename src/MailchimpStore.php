<?php

namespace Dhritiman\MailchimpStore;

use Dhritiman\MailchimpStore\Entities\Factory;

class MailChimpStore
{   
    protected $factory;

    public function __construct()
    {
        $this->factory = new Factory();
    }

    /**
     * Create a new entity
     *
     * @param array $input
     * @param string $class
     * @return array
     */
    public function create($input,$class)
    {
        $entity = $this->factory->make($class);
        return $entity->create($input);
    }

    /**
     * Create new entities by batch
     *
     * @param array $input
     * @param string $class
     * @return array
     */
    public function batch_create($input,$class)
    {
        $entity = $this->factory->make($class);
        return $entity->batch_create($input);
    }

    /**
     * Fetch an entity
     *
     * @param integer $input
     * @param string $class
     * @return array
     */
    public function fetch($input, $class)
    {
        $entity = $this->factory->make($class);
        return $entity->fetch($input);
    }

    /**
     * Fetch all belonging to an entity class
     *
     * @param string $class
     * @return array
     */
    public function all($class)
    {   
        $entity = $this->factory->make($class);
        return $entity->all();
    }

    /**
     * Delete an entity
     *
     * @param integer $input
     * @param string $class
     * @return array
     */
    public function delete($input, $class)
    {
        $entity = $this->factory->make($class);
        return $entity->delete($input);
    }
    
    /**
     * Check if a cart exists by ID
     *
     * @param integer $input
     * @param string $class
     * @return array
     */
    public function cart_exists($input, $class = 'cart')
    {   
        $entity = $this->factory->make($class);
        return $entity->exists($input);
    }

    /**
     * Check if a customer exists by email_id
     *
     * @param array $input
     * @param string $class
     * @return array
     */
    public function customer_exists($input, $class = 'customer')
    {
        $entity = $this->factory->make($class);
        return $entity->exists($input);
    }
}