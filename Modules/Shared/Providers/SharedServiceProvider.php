<?php

namespace Modules\Shared\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Providers\ModuleServiceProvider;
use Modules\Shared\Console\MakeRepositoryCommand;

class SharedServiceProvider extends ModuleServiceProvider
{
    protected $moduleName = 'Shared';

    public function register()
    {
        $this->initModules($this->moduleName);
    }

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            MakeRepositoryCommand::class
        ]);
    }
}
