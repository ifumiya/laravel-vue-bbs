FROM php:7.2

RUN \
    apt update && \
    apt upgrade -y && \
    apt install -y --no-install-recommends libzip-dev unzip libzip4 && \
    docker-php-ext-configure zip --with-libzip && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql && \
    apt remove -y libzip-dev && \
    apt autoremove -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer global require hirak/prestissimo

WORKDIR /var/www