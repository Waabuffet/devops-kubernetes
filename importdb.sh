#!/bin/bash
. .env

docker cp ./database/db.sql devops_db:/root
docker exec -it devops_db bash -c "mysql -uroot -pqweqwe123 < /root/db.sql"

