![multitrust](https://user-images.githubusercontent.com/17185462/27048621-5d5c413a-4fce-11e7-8ca4-dc7d6df16db9.png)

### Latest roles and permission for multi-auth or single-auth
---
* Full Documentation : https://hellolaravel.org/multitrust
---
### composer `multi-auth` + `multitrust`
```php
composer require "code4mk/multitrust:dev-master"
```

### Composer `Default auth \ single-auth` + `multitrust`
```php
composer require "code4mk/multitrust": "1.0.x-dev"
```

### provider :-------

```php
Code4mk\Multitrust\MultitrustServiceProvider::class,
```

### config clear 

```php
php artisan config:clear
```

### Vendor Publish
```php
php artisan vendor:publish --provider="Code4mk\Multitrust\MultitrustServiceProvider" --tag=config

php artisan vendor:publish --provider="Code4mk\Multitrust\MultitrustServiceProvider" --tag=migrations

```
---
* Full Documentation : https://hellolaravel.org/multitrust
---
### Thanks
* [@jacurtis](https://twitter.com/_jacurtis) - for multiauth system . >> multiauth+multitrust 

*  [Roman Bican](https://github.com/romanbican)

* [Ultraware](https://github.com/ultraware)
---
