<?php

namespace App\Providers;

use App\Services\ArticleService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $locale = $this->app['request']->segment(1) ?: 'id';

        $this->app->when(ArticleService::class)
            ->needs('$locale')
            ->give($locale);
    }
}
