#!/bin/bash

# Render Build Script for Laravel
echo "Starting Render build..."

# Install dependencies
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
npm install

# Build assets
npm run build

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Seed database
php artisan db:seed --force

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Render build completed successfully!"