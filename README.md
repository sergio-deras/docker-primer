# docker-primer
Docker primer


Cleanup

docker container rm  $(docker container ls -aq)
docker rmi $(docker images -q)


Hub
docker tag curl-sample:latest devderas/curl-sample:latest
docker login
docker push devderas/curl-sample:latest
