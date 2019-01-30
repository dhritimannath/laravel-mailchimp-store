MailChimp Integration for Laravel 5.*
=======================
[![Total Downloads](https://poser.pugx.org/dhritimanrick/mailchimp-store/downloads)](https://packagist.org/packages/dhritimanrick/mailchimp-store)

Requirements
============

* PHP >= 5.6.*
* MailChimp API Wrapper package install it from [here](https://packagist.org/packages/drewm/mailchimp-api)

Installation
============

    composer require dhritimanrick/mailchimp-store

Add the service provider and facade in your config/app.php

Service Provider

    Dhritiman\MailchimpStore\Providers\MailchimpStoreServiceProvider::class,

Aliases (Facade)

    'MailChimpStore'      =>  Dhritiman\MailchimpStore\Facades\MailChimpStore::class,
