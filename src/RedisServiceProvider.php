<?php

namespace Alone\LaravelRedisExtendable;

use Illuminate\Support\Arr;
use Illuminate\Redis\RedisServiceProvider as BaseRedisServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class RedisServiceProvider extends BaseRedisServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('redis',function(Application $app) {
            $config = $app->make('config')->get('database.redis');
            return new RedisManager($app,Arr::pull($config,'client','predis'),$config);
        });
        $this->app->bind('redis.connection',function(Application $app) {
            return $app['redis']->connection();
        });
    }

}
