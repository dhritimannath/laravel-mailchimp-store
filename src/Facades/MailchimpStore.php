<?php

namespace Dhritiman\MailchimpStore\Facades;

use Illuminate\Support\Facades\Facade;
class MailChimpStore extends Facade
{ 
    protected static function getFacadeAccessor()
    {
        return 'mailchimp_store';
    }
}