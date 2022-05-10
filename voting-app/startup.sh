#!/bin/bash

creds_file=/var/www/html/database/db-creds.ini
creds_file2=/home/results_app/database/db-creds.ini

for i in $creds_file $creds_file2; do
    sed -i "s/DB_HOST=.*/DB_HOST=$DB_HOST/" $i
    sed -i "s/DB_PORT=.*/DB_PORT=$DB_PORT/" $i
    sed -i "s/DB_DATABASE=.*/DB_DATABASE=$DB_DATABASE/" $i
    sed -i "s/DB_USER=.*/DB_USER=$DB_USER/" $i
    sed -i "s/DB_PASS=.*/DB_PASS=$DB_PASS/" $i
done

service haproxy start

exec "$@"