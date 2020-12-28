FROM composer AS build-composer
WORKDIR /build

COPY . /build

RUN composer config --global repo.packagist composer https://packagist.org
RUN COMPOSER_MEMORY_LIMIT=-1 composer u -vvvv --apcu-autoloader --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader --ignore-platform-reqs

FROM tg4reg.azurecr.io/z1_php_base AS base

WORKDIR /app
COPY --from=build-composer /build /app