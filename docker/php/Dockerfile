FROM php:8.2-fpm-alpine

RUN apk add --no-cache curl git build-base zlib-dev oniguruma-dev autoconf bash linux-headers
RUN docker-php-ext-install pdo_mysql


COPY ./ /var/www
WORKDIR /var/www

ARG PUID=1000
ARG PGID=1000
RUN apk --no-cache add shadow && \
    groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data
