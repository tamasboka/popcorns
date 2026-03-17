#!/bin/bash

cd ../basic-backend

# .env filehoz
if ! [ -f ".env" ]; then
        cp .env.example .env
	echo ".env created"
	if [ -d "vendor" ]; then
		php artisan key:generate
	fi
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
