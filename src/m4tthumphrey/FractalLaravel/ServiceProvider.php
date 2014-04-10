<?php namespace m4tthumphrey\FractalLaravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use League\Fractal\Manager;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('m4tthumphrey/fractal-laravel', 'fractal');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared(array('League\Fractal\Manager' => 'fractal'), function() {
            return new Manager();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('fractal');
    }

}
