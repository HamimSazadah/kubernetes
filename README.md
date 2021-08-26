# Prerequisite 
1. Install [Docker Desktop](https://www.docker.com/get-started)
2. Register [Docker Hub](https://hub.docker.com/signup)
3. Install [Minikube](https://minikube.sigs.k8s.io/docs/start/)
 


# Docker
## Build Image
build image from Dockerfile and tag as "demo"

```docker build -t demo .```

## RUN Image
run image with detach(run in background) and port-forward to 8080 port

```docker run -dp 8080:8080 demo```

## List Process
```docker ps```

## Access Container
access continer interactively and run bash shell

```docker exec -it xxxx sh```

## Kill Process
```docker kill process_id```

## tag image
tag image demo as hamimsazadah/demo (hub.docker standar name)
```docker tag demo hamimsazadah/demo```
## push image
push image to hub.docker
```docker push hamimsazadah/demo```

# Kubernetes
Run minikube first 

```minikube start```

for ssh to minikube 

```miinikube ssh```

show dashboard 

```minikube dashboard``` 


## List Node
for list node

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

## Scale pod
```Kubectl scale deploy demo --replicas=4```

## Delete resource
```kubectl delete po demo```

# Practice
1. Create image repo in hub.docker.com, name yourname/demo
2. Create demo image and push hub.docker.com
   1. docker build -t demo PHP/
   2. docker images
   3. docker tag demo hamimsazadah/demo
   4. docker push hamimsazadah/demo
3. Create PersistentVolume for postgres and redis in folder volume.
   1. kubectl create -f volume/postgres.yaml
   2. kubectl create -f volume/redis.yaml
4. Create PersistentVolumeClim for postgres and redis in folder pvc.
   1. kubectl create -f pvc/postgres-pvc.yaml
   2. kubectl create -f pvc/redis-pvc.yaml
5. Create Deployment for php, postgres and redis in folder deployment.
   1. kubectl create -f deployment/postgres.yaml
   2. kubectl create -f deployment/redis.yaml
   3. kubectl create -f deployment/php.yaml
6. Populate table to postgres.
   1. kubectl exec -it postgres-84d8bcf584-l5t5c -- sh
   2. $psql db
   3. copy and paste postgres.sql
7. Create Service for postgres and redis.
   1. kubectl create -f service/postgres.yaml
   2. kubectl create -f service/redis.yaml
8. Scale php deployment 4 replicas.
   1. kubectl scale deploy php --replicas=4
9. Expose using port-forward to localhost.
   1. kubectl port-forward php-d55fdd7d5-n7kxb 8080:8080
   2. open in browser localhost:8080
   3. and localhost:8080/app.php?id=2 periodicly

* always check logs if error and pod is not ready.
* and use ```kubectl describe po pod_name``` for cek event in pod.
* we need access minikube by ssh for create userdata directory for postgres
  * minikube ssh
  * mkdir /data/postgres/userdata/