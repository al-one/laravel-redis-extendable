<?php

namespace Alone\LaravelRedisExtendable;

use Illuminate\Support\Arr;
use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class RedisExtendableServiceProvider extends RedisServiceProvider
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
            return new RedisManager(Arr::pull($config,'client','predis'),$config);
        });
        $this->app->bind('redis.connection',function(Application $app) {
            return $app['redis']->connection();
        });
    }

}
