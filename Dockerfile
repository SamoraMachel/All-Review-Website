FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite

EXPOSE 80:8081

ADD . /var/www/
ADD ./public /var/www/html













