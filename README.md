# Prerequisite 
1. Install [Docker Desktop]([https://link](https://www.docker.com/get-started)) 
2. Register [Docker Hub]([https://link](https://hub.docker.com/signup))
3. Install [Minikube]([https://link](https://minikube.sigs.k8s.io/docs/start/))
 


# Docker
## Build Image
```docker build -t demo .```

## RUN Image
```docker run -dp 8080:8080 demo```

## List Process
```docker ps```

## Access Container
```docker exec -it xxxx sh```

## Kill Process
```docker kill xxxx```

## tag image
```docker tag demo hamimsazadah/demo```
## push image
```docker push hamimsazadah/demo```

# Kubernetes
Run minikube first 
```minikube start```
for ssh to minikube ```miinikube ssh```
show dashboard ```minikube dashboard``` 


## Check Node
```kubectl get node```

## Run Image
```kubectl run demo --image=telkomindonesia/alpine:php-7.1-apache-novol --port=8080```

## Get runnning pods
```kubectl get pods```

## Run command in Container
```kubectl exec -it demo -- sh```

## Create kubernetes Resource from yaml
```kubectl create -f php.yaml```

## port-forward container
```kubectl port-forward demo 8080:8080```

## Check log pod
```kubectl logs demo```

## Delete resource
```kubectl delete po demo```