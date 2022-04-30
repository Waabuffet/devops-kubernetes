kubectl autoscale deployment voting-app-deployment --cpu-percent=50 --min=1 --max=10


# check status
kubectl get hpa

# or with watch
kubectl get hpa voting-app-deployment --watch

# produce some load (run on a seperate terminal)
kubectl run -i --tty load-generator --rm --image=busybox:1.28 --restart=Never -- /bin/sh -c "while sleep 0.01; do wget -q -O- http://voting-app-service; done"