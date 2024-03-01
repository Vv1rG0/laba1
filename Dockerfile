FROM php:latest

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 80
# это запускаем встроенный веб сервер php
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]