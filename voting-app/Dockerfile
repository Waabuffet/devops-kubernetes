FROM php:apache

COPY ./app/. /var/www/html/
COPY ./startup.sh /root/startup.sh

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

RUN chmod +x /root/startup.sh
ENTRYPOINT [ "/root/startup.sh" ]

CMD ["apache2-foreground"]