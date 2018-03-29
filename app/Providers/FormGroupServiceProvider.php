<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormGroupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('textGroup','components.text', ['params','errors']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
