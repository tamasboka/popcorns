#!/bin/bash
cd backend
php artisan migrate:fresh --seed
