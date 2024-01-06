<?php

namespace LaravelJsTan;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use JsTan\Client;


class JsTanServiceProvider extends ServiceProvider
{
    /**
     * @return void
     * 引导所有的应用服务
     */
    public function boot(): void
    {
        if ($this->app instanceof Application && $this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__).'/config/jsTan.php' => config_path('jsTan.php'), ],
                'laravel-jsTan'
            );
        }
    }

    /**
     * @return void
     * 注册所有的应用服务
     */
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
