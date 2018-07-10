<?php

namespace Dhritiman\MailchimpStore\Providers;

use Illuminate\Support\ServiceProvider;
use Dhritiman\MailchimpStore\MailchimpStore;

class MailchimpStoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {   
        $config = __DIR__ . '/../config/mailchimp.php';
        $this->publishes([$config => config_path('mailchimp.php')]);

        $this->app->singleton('mailchimp_store', function () {
            return new MailchimpStore();
        });
    }
}