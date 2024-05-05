![](infophp.JPG)
![](dbphp.JPG)

# docker-compose.yaml
```
version: '3.8'

networks:
  m347-network:
    ipam:
      driver: default
      config:
        - subnet: 172.20.0.0/16
          ip_range: 172.20.5.0/24
          gateway: 172.20.5.254

services:
  m347-kn04a-db:
    image: mariadb:latest
    container_name: m347-kn04a-db
    environment:
      - MYSQL_ROOT_PASSWORD=yes
    networks:
      - m347-network
    ports:
      - "3306:3306"

  m347-kn04a-web:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: m347-kn04a-web
    ports:
      - "80:80"
    networks:
      - m347-network

```

# Dockerfile
```
FROM php:8.0-apache
WORKDIR /var/www/html/
COPY src .
EXPOSE 80
RUN ["docker-php-ext-install", "mysqli"]
```

docker compose up umfasst
docker build --> image erstellen
docker create --> container erstellen
docker start --> container starten

![](dbphp2.JPG)
![](infophp2.JPG)

# docker-compose.yaml
```
version: '3.8'

networks:
  m347-network:
    ipam:
      driver: default
      config:
        - subnet: 172.20.0.0/16
          ip_range: 172.20.5.0/24
          gateway: 172.20.5.254

services:
  m347-kn04a-db:
    image: mariadb:latest
    container_name: m347-kn04a-db
    environment:
      - MYSQL_ROOT_PASSWORD=yes
    networks:
      - m347-network
    ports:
      - "3306:3306"

  m347-kn04a-web:
    image: kn02b-web:latest
    container_name: m347-kn04a-web
    ports:
      - "80:80"
    networks:
      - m347-network

```
