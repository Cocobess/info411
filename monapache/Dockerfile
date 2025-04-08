FROM php:8.3-apache

RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y git vim nano curl wget telnet links

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/
RUN git clone https://github.com/Cocobess/info411.git html

EXPOSE 80
CMD ["apache2-foreground"]