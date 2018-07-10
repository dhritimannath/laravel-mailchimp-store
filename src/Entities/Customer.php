<?php

namespace Dhritiman\MailchimpStore\Entities;

use Dhritiman\MailchimpStore\Entity;
use Dhritiman\MailchimpStore\OperationInterface;

class Customer extends Entity implements OperationInterface
{   
    /**
     * Create customer
     *
     * @param array $data
     * @return void
     */
    public function create($data)
    {
        return parent::create($data);
    }

    /**
     * Create customers by batch
     *
     * @param array $data
     * @return void
     */
    public function batch_create($data)
    {
        return parent::batch_create($data);
    }

    /**
     * Fetch customer by ID
     *
     * @param string $id
     * @return void
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }

    /**
     * Retrieve all customers
     *
     * @return void
     */
    public function all()
    {
        return parent::all();
    }

    /**
     * Delete a customer by ID
     *
     * @param string $id
     * @return void
     */
    public function delete($id)
    {
        return parent::delete($id);
    }

    public function exists($input)
    {
        $all = $this->all();
        return $this->matchEmail($all,$input);
    }

    public function matchEmail($all,$input)
    {   
        foreach ($all['customers'] as $value) {
            if($value['email_address'] == $input['email']) {
                return $value['id'];
            }
        }
    }
}