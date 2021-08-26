FROM telkomindonesia/alpine:php-7.1-apache-novol

WORKDIR /var/www/data/html
COPY . .
USER root
# RUN apt update -y &&  apt-get -y install php7.2-redis
RUN composer install

USER user
