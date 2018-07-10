<?php

namespace Dhritiman\MailchimpStore\Entities;

use Dhritiman\MailchimpStore\Entity;
use Dhritiman\MailchimpStore\OperationInterface;

class Cart extends Entity implements OperationInterface
{   
    /**
     * Create cart
     *
     * @param array $data
     * @return void
     */
    public function create($data = array())
    {
        return parent::create($data);
    }

    /**
     * Create carts by batch
     *
     * @param array $data
     * @return void
     */
    public function batch_create($data = array())
    {
        return parent::batch_create($data);
    }

    /**
     * Fetch cart by ID 
     *
     * @param string $id
     * @return void
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    /**
     * Retrieve all carts
     *
     * @return void
     */
    public function all()
    {
        return parent::all();
    }

    /**
     * Delete a cart by ID
     *
     * @param string $id
     * @return void
     */
    public function delete($id)
    {
        return parent::delete($id);
    }

    public function exists($id)
    {   
        return parent::fetch($id);
    }
}