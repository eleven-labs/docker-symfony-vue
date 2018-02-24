FROM composer:latest as composer
FROM php:7.2-fpm-alpine

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime
RUN "date"

COPY docker/php/php.ini ${PHP_INI_DIR}/php.ini

RUN apk add --no-cache --virtual persistent-deps \
        git \
        pcre-dev \
        postgresql-dev \
        icu-libs \
        zlib \
        shadow

RUN apk add --no-cache --virtual \
        build-deps \
        $PHPIZE_DEPS \
        icu-dev \
        zlib-dev

RUN docker-php-ext-install \
        opcache \
        intl \
        zip \
        pdo_pgsql

RUN pecl install \
        apcu \
        xdebug

RUN docker-php-ext-enable \
        opcache \
        apcu \
        xdebug

RUN apk del build-deps

RUN usermod -u 1000 www-data

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN mkdir /var/composer
ENV COMPOSER_HOME /var/composer
RUN chown -R www-data /var/composer

RUN rm -rf /var/cache/apk/*
