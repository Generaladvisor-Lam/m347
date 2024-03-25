# A

## Dockerfile
```
# nutzt die offizielle nginx als basis
FROM nginx

# copiert helloworld.html ins standardspeicherort fuer html-dateien in nginx
COPY helloworld.html /usr/share/nginx/html/

# ermoeglicht das abhoeren der requests durch port 80
EXPOSE 80
```

## commands
docker build -t kn02a

docker tag kn02a masa07/m347:kn02a

docker push masa07/m347:kn02a

docker run -d -p 8080:80 --name kn02 kn02a

![](aDD.JPG)

![](ahtml.JPG)

# B

## telnet befehl

![](telnet.JPG)

## Dockerfile-db
```
FROM mariadb

ENV MYSQL_ROOT_PASSWORD 1234

EXPOSE 3306
```

![](db.php.JPG)

![](infophp.JPG)

## Dockerfile-web
```
FROM php:8.0-apache

COPY info.php /var/www/html/
COPY db.php /var/www/html/

RUN docker-php-ext-install mysqli

EXPOSE 80
```

## commands 
docker build -t kn02b-db -f Dockerfile-db .

docker run -d --name kn02b-db -p 3306:3306 kn02b-db

docker build -t kn02b-web -f Dockerfile-web .

docker run -d --name kn02b-web -p 8080:80 kn02b-web

