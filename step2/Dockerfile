FROM php:latest

RUN mkdir /myproject
COPY index.php /myproject
WORKDIR /myproject
CMD ["php", "-S", "0.0.0.0:8000"]

# docker container rm  $(docker container ls -aq)