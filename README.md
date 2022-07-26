# SpiN API



## Quick Start

``` bash
#Clone the repo
git clone git@github.com:AlAtsal/SpiN.git

#Copy the .env.example to .env
cp .env.example .env

# Install Dependencies
sail up -d

# Run Migrations
sail artisan migrate --seed

# If you get an error about an encryption key
sail artisan key:generate
```
Your application must be ready in http://localhost
## Endpoints

### List all articles with links and meta
``` bash
GET api/listings
```
### Get single article
``` bash
GET api/listings/{id}
```