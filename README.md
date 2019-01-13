# Laravel Redis Manager Extendable

## Installing

```sh
$ composer require al-one/laravel-redis-extendable -vvv
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


## License

MIT