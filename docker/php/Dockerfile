FROM php:7.2-fpm

RUN apt-get update && \
    apt-get install -y \
        git \
        libzip-dev \
        unzip \
        libpq-dev

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version
RUN mkdir /var/www/.composer && chown -R www-data /var/www/.composer

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Paris /etc/localtime
RUN "date"

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo_pgsql zip

# Type docker-php-ext-enable to see available extensions
#RUN docker-php-ext-enable zip

RUN usermod -u 1000 www-data

WORKDIR /var/www/symfony
