<?php

namespace Dhritiman\MailchimpStore;

interface OperationInterface
{   
    public function create($input);

    public function fetch($id);

    public function all();

    public function delete($id);
}