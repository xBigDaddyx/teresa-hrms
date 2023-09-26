<?php

namespace Bigdaddy\TeresaHrms\Providers;

use Luchavez\StarterKit\Abstracts\BaseStarterKitServiceProvider as ServiceProvider;
use Bigdaddy\TeresaHrms\Services\TeresaHrms;

/**
 * Class TeresaHrmsServiceProvider
 *
 * @author Faisal Yusuf <yussupcazzanova97@gmail.com>
 */
class TeresaHrmsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected array $commands = [];

    /**
     * @var string|null
     */
    protected string|null $route_prefix = null;

    /**
     * @var bool
     */
    protected bool $prefix_route_with_file_name = false;

    /**
     * @var bool
     */
    protected bool $prefix_route_with_directory = false;

    /**
     * Polymorphism Morph Map
     *
     * @link    https://laravel.com/docs/8.x/eloquent-relationships#custom-polymorphic-types
     *
     * @example [ 'user' => User::class ]
     *
     * @var array
     */
    protected array $morph_map = [];

    /**
     * Laravel Observer Map
     *
     * @link    https://laravel.com/docs/8.x/eloquent#observers
     *
     * @example [ UserObserver::class => User::class ]
     *
     * @var array
     */
    protected array $observer_map = [];

    /**
     * Laravel Policy Map
     *
     * @link    https://laravel.com/docs/8.x/authorization#registering-policies
     *
     * @example [ UserPolicy::class => User::class ]
     *
     * @var array
     */
    protected array $policy_map = [];

    /**
     * Laravel Repository Map
     *
     * @example [ UserRepository::class => User::class ]
     *
     * @var array
     */
    protected array $repository_map = [];

    /**
     * Publishable Environment Variables
     *
     * @example [ 'HELLO_WORLD' => true ]
     *
     * @var array
     */
    protected array $env_vars = [];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('teresa-hrms', fn () => new TeresaHrms());
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['teresa-hrms'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../../config/teresa-hrms.php' => config_path('teresa-hrms.php'),
        ], 'teresa-hrms.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/bigdaddy'),
        ], 'teresa-hrms.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/bigdaddy'),
        ], 'teresa-hrms.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/bigdaddy'),
        ], 'teresa-hrms.views');*/

        // Registering package commands.
         $this->commands($this->commands);
    }
}
