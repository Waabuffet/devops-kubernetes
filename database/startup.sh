#!/bin/bash

mysqld start

if [ -d /var/lib/mysql/voting_app ] ; then 
    mysql -uroot -p$MYSQL_ROOT_PASSWORD < /root/db.sql
    mysql -uroot -p$MYSQL_ROOT_PASSWORD < /root/db-data.sql
fi

exec "$@"