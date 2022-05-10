FROM php:apache

COPY ./app/. /var/www/html/
RUN mkdir -p /home/results_app
COPY ./results_app/. /home/results_app

COPY ./startup.sh /root/startup.sh

RUN docker-php-ext-install pdo pdo_mysql

# change default port for apache to 8081 and add listener on port 8082
RUN echo "Listen 8081" > /etc/apache2/ports.conf
RUN echo "Listen 8082" >> /etc/apache2/ports.conf
RUN sed -i "s/:80/:8081/g" /etc/apache2/sites-enabled/000-default.conf

# add second virtualhost for second backend
COPY ./results_app.conf /etc/apache2/sites-enabled/

# install haproxy and apply configuration, listens on port 80
RUN apt update -y && apt install -y haproxy vim
COPY ./haproxy.cfg /etc/haproxy/haproxy.cfg

EXPOSE 80

RUN chmod +x /root/startup.sh
ENTRYPOINT [ "/root/startup.sh" ]

CMD ["apache2-foreground"]