#!/bin/bash

if [ -d /var/lib/mysql/voting_app ] ; then 
    # deploy database
fi

# check if data present in db
# docker exec -i devops_db mysql -uroot -pqweqwe123 <<< "use voting_app; select * from users;"

exec "$@"