<?php

namespace Modules\Core\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    private $moduleName;

    private function modulePath($path): string
    {
        return base_path("Modules/" . $this->moduleName . DIRECTORY_SEPARATOR . ltrim($path, '/'));
    }
    protected function initModules($moduleName): void
    {
        $this->moduleName = $moduleName;
        $this->loadTranslations();
        $this->loadMigrations();
        $this->loadRoutes();
    }

    protected function loadTranslations(): void
    {
        $this->loadTranslationsFrom($this->modulePath('/Lang') , $this->moduleName);
    }

    protected function loadMigrations($path = null): void
    {
        $this->loadMigrationsFrom($path ?? $this->modulePath("/Database/Migrations"));
    }

    protected function loadRoutes($apiRoutes = false)
    {
        if (!app()->routesAreCached()) {
            Route::middleware('web')
                ->namespace("Modules\\$this->moduleName\\Http\\Controllers")
                ->group($this->modulePath("/Routes/web.php"));
        }

        if ($apiRoutes){
            $this->loadApiRoutes();
        }
    }

    protected function loadApiRoutes()
    {
        if (!app()->routesAreCached()) {
            Route::middleware('api')
                ->prefix('api')
                ->namespace("Modules\\$this->moduleName\\Http\\Controllers")
                ->group($this->modulePath("/Routes/api.php"));
        }
    }
}
