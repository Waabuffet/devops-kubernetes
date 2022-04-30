FROM mysql:latest

COPY ./startup.sh /root/startup.sh
COPY ./db.sql /root/db.sql
COPY ./db-data.sql /root/db-data.sql

RUN chmod +x /root/startup.sh

ENTRYPOINT [ "/root/startup.sh" ]
CMD ["mysqld"]