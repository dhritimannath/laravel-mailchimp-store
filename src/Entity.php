<?php

namespace Dhritiman\MailchimpStore;

use \DrewM\MailChimp\MailChimp;
use \DrewM\MailChimp\Batch;

class Entity
{   
    private $mailchimp;
    private $store_path;
    private $store_id;

    public function __construct()
    {   
        $this->mailchimp = new MailChimp(config('mailchimp.api_key'));
        $this->store_path = 'ecommerce/stores/';
        $this->store_id = config('mailchimp.store_id');   
    }
    
    /**
     * Create Entity
     *
     * @param array $data
     * @return void
     */
    public function create($data)
    {  
        $url = $this->getEntityUrl();
        return $this->mailchimp->post($url,$data);
    }

    /**
     * Create Entity by batch
     *
     * @param array $data
     * @return void
     */
    public function batch_create($data)
    {  
        $url = $this->getEntityUrl();
        return $this->batchProcess($url,$data);
    }

    /**
     * Fetch entity by id
     *
     * @param string $id
     * @return void
     */
    public function fetch($id)
    { 
        $url = $this->getEntityUrl();
        return $this->mailchimp->get($url.$id);
    }

    /**
     * Retrieve all entities
     *
     * @return void
     */
    public function all()
    {
        $url = $this->getEntityUrl();
        return $this->mailchimp->get($url); 
    }

    /**
     * Delete entity
     *
     * @return void
     */
    public function delete($id)
    {
        $url = $this->getEntityUrl();
        return $this->mailchimp->delete($url.$id); 
    }

    /**
     * Make Entity Url from class name
     *
     * @return void
     */
    protected function getEntityUrl()
    {  
        $className = (new \ReflectionClass($this))->getShortName();
        $e_low = lcfirst($className);
        return $this->store_path.$this->store_id.'/'.$e_low.'s/';
    }

    /**
     * Perform batch operation
     *
     * @param array $data
     * @param string $url
     * @return void
     */
    protected function batchProcess($url,$data)
    {   
        $batch = $this->mailchimp->new_batch();

        foreach ($data as $k => $v) {
            $batch->post('op'.$k, $url, $v);
        } 

        $result  = $batch->execute();
        return $result;
    }
}