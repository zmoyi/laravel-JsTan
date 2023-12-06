<?php
declare(strict_types=1);
namespace LaravelJsTan\Facades;

use Illuminate\Support\Facades\Facade;

class JsTan extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'LaravelJsTan';
    }

    public static function Client()
    {
        return app('JsTanService');
    }

}
