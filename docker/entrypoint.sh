#!/bin/bash

# Exit on error
set -e

# Run migrations (force is needed in production)
echo "Running migrations..."
php artisan migrate --force

# Seed database with initial data
echo "Seeding database..."
php artisan db:seed --force

# Cache configuration, routes, and views
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Fix permissions for storage (just in case)
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Start Apache in foreground
echo "Starting Apache..."
exec apache2-foreground
