<?php

namespace Dhritiman\MailchimpStore\Entities;

use Dhritiman\MailchimpStore\Entity;
use Dhritiman\MailchimpStore\OperationInterface;

class Product extends Entity implements OperationInterface
{   
    /**
     * Create product
     *
     * @param array $data
     * @return void
     */
    public function create($data = array())
    {
        return parent::create($data);
    }

    /**
     * Create products by batch
     *
     * @param array $data
     * @return void
     */
    public function batch_create($data = array())
    {
        return parent::batch_create($data);
    }

    /**
     * Fetch product by ID
     *
     * @param string $id
     * @return void
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    /**
     * Retrieve all products
     *
     * @return void
     */
    public function all()
    {
        return parent::all();
    }

    /**
     * Delete a product by ID
     *
     * @param string $id
     * @return void
     */
    public function delete($id)
    {
        return parent::delete($id);
    }
}