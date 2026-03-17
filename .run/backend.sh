#!/bin/bash

cd ../basic-backend

# .env filehoz
if [ -f ".env.example" ]; then
        cp .env.example .env
fi

# setup
if [ -d "vendor" ]; then
        php artisan serve
else
        composer i
	php artisan key:generate
        php artisan migrate
        php artisan db:seed
        php artisan serve
fi
