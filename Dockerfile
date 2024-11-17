FROM php:8.3-fpm

WORKDIR /var/www

# Kerakli kutubxonalar va PHP kengaytmalarini o'rnatish
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
       pdo_mysql \
       pdo_pgsql \
       zip \
       gd

# Composerni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Composer fayllarini ko'chirish va kutubxonalarni o'rnatish
COPY composer.json composer.lock /var/www/
RUN composer install -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

# Loyihaning qolgan qismini ko'chirish
COPY . /var/www

# Foydalanuvchi huquqlarini to'g'rilash
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www
