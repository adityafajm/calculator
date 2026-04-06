FROM php:8.2-cli

WORKDIR /app

COPY . .

RUN apt-get update && apt-get install -y unzip git \
    && docker-php-ext-install pdo pdo_mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php composer.phar install

CMD php artisan serve --host=0.0.0.0 --port=8000