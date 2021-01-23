# docker-primer
Docker primer


## CLEANUP
docker container rm  $(docker container ls -aq)
docker rmi $(docker images -q)


## HUB
docker tag curl-sample:latest devderas/curl-sample:latest
docker login
docker push devderas/curl-sample:latest


## NETWORK
* ls
* rm {name}
* create {name}

* BRIDGE is used by default if no --network is used
* docker network create simple-network
* docker run --rm -d --name my-server --network simple-network httpd
* docker run --rm --network simple-network mycurl my-server 
* inspect {name}
* docker network inspect simple-network
* Inspects the network config
* docker run --rm mycurl 172.24.0.2 (WILL NOT WORK)
* docker run --rm --network simple-network mycurl 172.24.0.2 (DOES WORK)
* inspect {driver}
* docker network inspect bridge
* Drivers (scope = local)
Bridge
Host
Null
