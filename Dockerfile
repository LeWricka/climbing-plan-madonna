FROM php:8.0.0-fpm-alpine

RUN apk --no-cache add $PHPIZE_DEPS zip unzip git zlib-dev linux-headers

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk update && apk add git && apk add nodejs npm

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install grpc
RUN docker-php-ext-enable grpc