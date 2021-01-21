FROM alpine

RUN apk update && apk add curl

ENTRYPOINT [ "curl" ]
# Execute this, with the parameters sent in the run command


# docker system prune, removes some unused data
# docker rmi $(docker images -q), removes images
# docker tag curl-sample:latest devderas/curl-sample:latest
# docker run --rm devderas/curl-sample www.google.com