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

* BRIDGE is used by default if no --network is used, no automatic DNS

* docker run --rm -d --name my-httpd httpd
* docker run --rm    --name my-curl devderas/curl-sample:latest my-httpd (DOES NOT WORK, name resolution does not work)
* docker run --rm    --name my-curl devderas/curl-sample:latest 172.17.0.2 (DOES WORK, they are in the same network but without name resolution)

* docker network create simple-network
* docker run --rm -d --network simple-network     --name my-server httpd
* docker run --rm    --network simple-network mycurl     my-server 

* inspect {name}
* docker network inspect simple-network
* docker run --rm mycurl 172.24.0.2 (WILL NOT WORK, you have to add it to the same Nw where the other container is running)
* docker run --rm --network simple-network mycurl 172.24.0.2 (DOES WORK)

* inspect {driver}
* docker network inspect bridge
* Drivers (scope = local)
Bridge
Host
Null
