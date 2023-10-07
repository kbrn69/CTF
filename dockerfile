FROM php:7.4-apache

ENV DEBIAN_FRONTEND=noninteractive

COPY ./data/ /var/www/html/


WORKDIR /var/www/html

RUN chown www-data:www-data /var/www/html -R
RUN service apache2 start

EXPOSE 80
