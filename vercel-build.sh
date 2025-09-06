#!/bin/bash

# Vercel Build Script for Laravel
echo "Starting Vercel build..."

# Install dependencies
composer install --no-dev --optimize-autoloader

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

# Build assets
npm install
npm run build

echo "Vercel build completed successfully!"
