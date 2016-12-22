FROM php:7-fpm
RUN apt update 
RUN apt install libpng-dev libpq-dev -y
RUN docker-php-ext-install gd pgsql pdo_pgsql
