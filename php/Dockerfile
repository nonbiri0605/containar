FROM php:fpm
COPY php.ini /usr/local/etc/php/

# vim install
RUN apt-get update
RUN apt-get install -y vim

# php module
 RUN apt-get install -y zlib1g-dev \
   && apt-get install -y git \
   && apt-get install -y libzip* \
   && docker-php-ext-install zip

# composer install
RUN curl -s http://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html
RUN composer global require "laravel/installer"
