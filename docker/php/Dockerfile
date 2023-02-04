FROM php:8.2-fpm

WORKDIR /var/www/html

# Default extension install using below command
# Core, ctype, curl, date, dom, fileinfo, filter, ftp, hash, iconv, json, libxml, mbstring, mysqlnd, openssl, pcre, PDO, pdo_mysql, pdo_sqlite, Phar, posix, random, readline, Reflection, session, SimpleXML, sodium, SPL, sqlite3, standard, tokenizer, xml, xmlreader

RUN docker-php-ext-install pdo pdo_mysql

# Mongo DB extension install
RUN #pecl install mongodb apcu && docker-php-ext-enable mongodb apcu opcache

# Install Postgre PDO
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Install redis & enable extension
RUN pecl install redis && docker-php-ext-enable redis


#Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev

# Install composer First Way
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install composer Second Way
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install nodejs & Yarn
RUN #curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh && bash nodesource_setup.sh && apt-get -y --force-yes install nodejs yarn

EXPOSE 9000
