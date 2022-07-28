FROM php:8.1.0-fpm-alpine

ENV COMPOSER_ALLOW_SUPERUSER="1"

ENV PERMANENT_DEPS \
    postgresql-dev \
    composer

RUN set -e \
    && apk add --quiet --no-cache ${PERMANENT_DEPS} > /dev/null \
    && docker-php-ext-install pdo_pgsql sockets > /dev/null \
    && mkdir /app /home/user /run/nginx

COPY ./docker/entrypoint.sh /etc/entrypoint.sh
COPY ./docker/nginx/conf.d/ /etc/nginx/conf.d/
COPY --chown=www-data:www-data ./src /app

ENV DB_CONNECTION pgsql

WORKDIR /app

RUN set -e \
    && chmod +x /etc/entrypoint.sh


EXPOSE 9000

ENTRYPOINT ["/etc/entrypoint.sh"]