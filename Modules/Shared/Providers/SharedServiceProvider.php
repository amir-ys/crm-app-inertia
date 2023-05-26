<?php

namespace Modules\Shared\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;

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
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
    }
}
