<?php namespace ErnestWisniewski\LaravelSofort;

use Illuminate\Support\ServiceProvider;

class SofortServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sofort.php' => config_path('sofort.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['Sofort'] = $this->app->share(function ($app)
        {
            $env = env('SOFORT_ENV', 'test');

            $config_key = config('sofort.' . $env . '.config_key');

            return new Sofort($config_key);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('Sofort');
    }

}
