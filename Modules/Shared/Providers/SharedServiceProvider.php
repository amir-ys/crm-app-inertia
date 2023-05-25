<?php

namespace Modules\Shared\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class SharedServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Shared';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'shared';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
