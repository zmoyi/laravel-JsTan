<?php

namespace LaravelJsTan;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use JsTan\Client;


class JsTanServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app instanceof Application && $this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__).'/config/jsTan.php' => config_path('jsTan.php'), ],
                'laravel-jsTan'
            );
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/jsTan.php', 'jsTan');


        $this->app->singleton('JsTanService', function () {
            return Client::getInstance(config('jsTan'));
        });
    }

    public function provides(): array
    {
        return ['JsTanService'];
    }

}
