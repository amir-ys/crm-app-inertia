<?php


namespace Modules\Auth\Providers;

use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Providers\ModuleServiceProvider;

class AuthServiceProvider extends ModuleServiceProvider
{
    public function register(): void
    {
        $this->initModules("Auth");
    }

    public function boot()
    {
    }

}
