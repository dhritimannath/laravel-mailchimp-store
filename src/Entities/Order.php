<?php

namespace Dhritiman\MailchimpStore\Entities;

use Dhritiman\MailchimpStore\Entity;
use Dhritiman\MailchimpStore\OperationInterface;

class Order extends Entity implements OperationInterface
{   
    /**
     * Create order
     *
     * @param array $data
     * @return void
     */
    public function create($data = array())
    {
        return parent::create($data);
    }

    /**
     * Create orders by batch
     *
     * @param array $data
     * @return void
     */
    public function batch_create($data = array())
    {
        return parent::batch_create($data);
    }

    /**
     * Fetch order by ID
     *
     * @param string $id
     * @return void
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    /**
     * Retrieve all orders
     *
     * @return void
     */
    public function all()
    {
        return parent::all();
    }

    /**
     * Delete order by ID
     *
     * @param string $id
     * @return void
     */
    public function delete($id)
    {
        return parent::delete($id);
    }
}