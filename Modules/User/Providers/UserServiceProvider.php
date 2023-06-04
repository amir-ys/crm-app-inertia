<?php

namespace Modules\User\Providers;

use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Providers\ModuleServiceProvider;

class UserServiceProvider extends ModuleServiceProvider
{
    protected string $moduleName = 'User';

    public function boot()
    {
        $this->initModules($this->moduleName);
    }

    public function register()
    {
    }
}
