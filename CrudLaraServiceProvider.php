<?php

namespace Mavvilabs\Crudlara;

use Illuminate\Support\ServiceProvider;

class CrudLaraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'tags');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/mavvilabs/crudlara'),
        ]);
        $this->publishes([
            __DIR__.'/migrations' => database_path('migrations/'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Mavvilabs\Crudlara\Controllers\CrudLaraController');
    }
}
