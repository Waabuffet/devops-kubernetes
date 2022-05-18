# devops university project

## Requirements

- enable ingress and metrics on minikube by using:
   ```
   minikube addons enable ingress
   minikube addons enable metrics-server
   ```
- helm required

## Installation

After cloning this project, simply go to the `kubernetes` directory and execute the following script:
```
cd ./kubernetes
./start-helm.sh
```

To stop the project and clean up, execute:
```
./stop-helm.sh
```