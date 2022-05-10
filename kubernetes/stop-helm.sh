#!/bin/bash

helm uninstall devops-voting-app
# kubectl delete deployment db
# kubectl delete deployment voting-app
# kubectl delete service db-service
# kubectl delete service voting-app-service
# kubectl delete secret db-secret
# kubectl delete configmap voting-app-config
# kubectl delete ing voting-app-ingress