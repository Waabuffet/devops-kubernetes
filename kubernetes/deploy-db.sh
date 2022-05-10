#!/bin/bash
POD=db-5cdbf8c77b-f2gsd

kubectl cp ../database/db.sql $POD:/root
kubectl cp ../database/db-data.sql $POD:/root

kubectl exec -it $POD bash -- /bin/sh "mysql -uroot -pqweqwe123 < /root/db.sql"
kubectl exec -it $POD bash -- /bin/sh "mysql -uroot -pqweqwe123 < /root/db-data.sql"