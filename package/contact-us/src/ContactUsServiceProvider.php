<?php

namespace Peeyush\ContactUS;

use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         $this->loadViewsFrom(__DIR__.'/views','contact-us');
         $this->loadMigrationsFrom(__DIR__.'./database/migrations');
    }

    public function register()
    {

    }
}

?>
