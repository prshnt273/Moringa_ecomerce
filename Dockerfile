FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libonig-dev \
    nodejs \
    npm \
    && docker-php-ext-install \
    pdo_mysql \
    intl \
    zip \
    mbstring \
    exif \
    pcntl

WORKDIR /var/www/html

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader --no-scripts

RUN npm install && npm run build

COPY nginx.conf /etc/nginx/sites-available/default

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD php-fpm -D && nginx -g "daemon off;"
