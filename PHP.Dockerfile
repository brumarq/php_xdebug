FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql

#Install xdebug
RUN pecl install xdebug
COPY docker/90-xdebug.ini "${PHP_INI_DIR}/conf.d"