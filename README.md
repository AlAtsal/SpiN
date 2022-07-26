# SpiN API



## Quick Start

``` bash

# Install Dependencies
composer install

# Run Migrations
php artisan migrate --seed

# If you get an error about an encryption key
php artisan key:generate
```

## Endpoints

### List all articles with links and meta
``` bash
GET api/listings
```
### Get single article
``` bash
GET api/listings/{id}
```