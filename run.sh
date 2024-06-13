#!/bin/bash

# Install dependencies
composer install
npm install

# Run database migrations
php artisan migrate

# Run database seeder
php artisan db:seed

# Run tests
php artisan test
