FROM php:7.3-fpm

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libzip-dev -y

RUN docker-php-ext-install bcmath pdo_mysql gd pcntl opcache

CMD ["php-fpm"]

EXPOSE 8000
