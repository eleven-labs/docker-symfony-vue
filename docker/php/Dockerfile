FROM php:7.2-fpm-alpine

ADD docker/php/php.ini ${PHP_INI_DIR}/php.ini

RUN apk --no-cache add \
        git \
        pcre-dev \
        postgresql-dev \
        shadow

RUN usermod -u 1000 www-data

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN sh -s www-data -c "composer --version"
RUN mkdir /var/www/.composer && chown -R www-data /var/www/.composer

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime
RUN "date"

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo_pgsql opcache
