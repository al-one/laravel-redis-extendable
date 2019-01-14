# Laravel Redis Manager Extendable

> 1.5.4支持Laravel 5.4 - 5.6版本
>
> 1.5.7支持Laravel 5.7及以上版本


## Installing

```sh
# Laravel 5.4 - 5.6
$ composer require "al-one/laravel-redis-extendable:~1.5.4" -vvv

# Laravel 5.7
$ composer require "al-one/laravel-redis-extendable:~1.5.7" -vvv
```


## Usage

```php
# config/app.php
<?php

return [

    'providers' => [
        // Illuminate\Redis\RedisServiceProvider::class,
        Alone\LaravelRedisExtendable\RedisServiceProvider::class,
    ],

];
```

```php
use Illuminate\Support\Facades\Redis;

Redis::extend('predis_listened',function()
{
    return new \Alone\LaravelPredisListened\PredisListenedConnector;
});
```


## License

MIT