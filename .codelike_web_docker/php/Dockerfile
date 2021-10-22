FROM php:fpm
COPY php.ini /usr/local/etc/php/

# vim install
RUN apt-get update -y 
RUN apt-get install -y vim
RUN apt-get install -y git \
                       libtool \
                       automake \
                       build-essential \
                       zip

# php module
RUN apt-get update && apt-get install -y \
   zlib1g-dev \
   git \
   libzip* \
   libonig-dev \
   libc-client-dev \
   libjpeg-dev \
   libpng-dev \
   libwebp-dev \
   libopenjp2-7-dev \ 
   librsvg2-dev \
   libde265-dev  \
   libkrb5-dev \
   libxml2-dev 

RUN rm -r /var/lib/apt/lists/*

RUN PHP_OPENSSL=yes docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install zip pdo_mysql mysqli mbstring imap soap

# composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /etc
RUN git clone https://github.com/strukturag/libheif.git
WORKDIR /etc/libheif 
RUN ./autogen.sh && ./configure && make && make install

WORKDIR /etc
RUN curl -OL https://github.com/ImageMagick/ImageMagick/archive/refs/tags/7.1.0-10.zip && unzip 7.1.0-10.zip
WORKDIR /etc/ImageMagick-7.1.0-10 
RUN ./configure && make && make install && ldconfig /user/local/lib

RUN pecl install imagick && docker-php-ext-enable imagick