#!/bin/sh

echo "Caching..."

php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Running migrations..."

php artisan migrate --force

echo "Starting PHP-FPM..."

php-fpm -D

echo "Starting Nginx..."

nginx -g "daemon off;"
