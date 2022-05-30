FROM php:8.1-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install exif
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY ./php-ini-overrides.ini $PHP_INI_DIR/conf.d/