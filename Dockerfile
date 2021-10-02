FROM php:8.0.9-apache
RUN  a2enmod headers
RUN  a2enmod rewrite

# Install Postgre PDO
RUN apt-get update -y && apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Get composer
# RUN curl -sS https://getcomposer.org/installer | php
# RUN mv composer.phar /usr/local/bin/composer