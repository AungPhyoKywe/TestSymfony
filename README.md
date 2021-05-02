# SymphArt

> A basic Symfony 5.2 CRUD 

## Quick Start

``` bash
# Install dependencies
composer install

# Edit the env file and add DB params

# Create Article schema
php bin/console doctrine:migrations:diff
# Run migrations
php bin/console doctrine:migrations:migrate

# Build for production
npm run build

# Run symfony server 
symfony server:start

```

