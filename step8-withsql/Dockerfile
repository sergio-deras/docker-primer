FROM php:7.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Apache already exposes port 80 with EXPOSE 80, it just needs the mapping