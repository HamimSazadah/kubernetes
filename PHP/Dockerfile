FROM telkomindonesia/debian-buster:php-7.2-apm-apache-novol

WORKDIR /var/www/html
COPY . .
USER root
RUN apt update -y &&  apt-get -y install php7.2-redis
RUN composer install

COPY .apm/99-elastic-apm-custom.ini /etc/php/7.2/fpm/conf.d/

USER user
