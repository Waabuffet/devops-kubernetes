#!/bin/bash

creds_file=$WORKDIR/database/db-creds.ini

sed -i "s/DB_HOST=.*/DB_HOST=$DB_HOST/" $creds_file
sed -i "s/DB_PORT=.*/DB_PORT=$DB_PORT/" $creds_file
sed -i "s/DB_DATABASE=.*/DB_DATABASE=$DB_DATABASE/" $creds_file
sed -i "s/DB_USER=.*/DB_USER=$DB_USER/" $creds_file
sed -i "s/DB_PASS=.*/DB_PASS=$DB_PASS/" $creds_file

exec "$@"