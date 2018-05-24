FROM php:7.0-apache

RUN docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-configure pdo_mysql
ADD ./app/ /var/www/html/