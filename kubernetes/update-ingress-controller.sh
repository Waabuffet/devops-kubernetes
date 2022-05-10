kubectl set image deployment/ingress-nginx-controller \
  controller=k8s.gcr.io/ingress-nginx/controller:v3.18.3@sha256:55a1fcda5b7657c372515fe402c3e39ad93aa59f6e4378e82acd99912fe6028d \
  -n ingress-nginx