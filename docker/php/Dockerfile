FROM php:fpm-alpine3.18

RUN apk update && apk upgrade
RUN apk add --no-cache --repository https://alpine.global.ssl.fastly.net/alpine/edge/community/

RUN apk add --no-cache curl-dev icu-dev libzip-dev libxml2-dev oniguruma-dev libpng libpng-dev libjpeg-turbo-dev libwebp-dev zlib-dev libxpm-dev
RUN docker-php-ext-install mysqli pdo pdo_mysql intl zip xml mbstring bcmath gd

ADD ./docker/php/www.conf /usr/local/etc/php-fpm.d/

RUN mkdir -p /var/www/html

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel
RUN chown laravel:laravel /var/www/html

WORKDIR /var/www/html

USER laravel

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer