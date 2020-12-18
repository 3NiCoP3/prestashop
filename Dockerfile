FROM php:7.2-apache

RUN apt-get upgrade -y && apt-get update -y
RUN apt-get install -y \
       git \
       vim \
       curl \
       bash \
       software-properties-common \
       lsb-release \
       gnupg \
       libcurl4-gnutls-dev \
       libxml2-dev \
       libjpeg-dev \
       libmcrypt-dev

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip mysqli

RUN apt update && apt install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && rm -r /var/lib/apt/lists/*

RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee -a /etc/apt/sources.list.d/php.list \
    && curl https://packages.sury.org/php/apt.gpg | apt-key add - \
    && apt-get update -qq \
    && docker-php-ext-install \
    curl \
    xml \
    mbstring \
    intl \
    zip \
    json \
    pdo \
    pdo_mysql \
    opcache

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/

COPY ./ /var/www/html/

RUN a2enmod rewrite
RUN chmod -R 777 /var/www/html/

CMD ["apachectl", "-D", "FOREGROUND"]