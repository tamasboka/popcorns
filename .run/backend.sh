#!/bin/bash
cd ../backend

# .env filehoz
if ! [ -f ".env" ]; then
	cp .env.example .env
        toilet ".env létrehozva!" -f smmono12.tlf -t
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
