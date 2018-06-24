Einfaches schnelles Beispiel:
 - docker container run --name nginx -p 80:80 nginx

Eigene Images:
 - 01
 - docker image build -t mywebserver .
 - Registries: https://hub.docker.com/

Umgebungsvariables und spezielle Versionen:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret mysql:5.7

Persistente Daten:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret -v ~/mysql:/var/lib/mysql mysql:5.7

Docker compose:
 - 02
 - docker volume create mysql 
 - fixture
 
Mehrere Services
 - 03

Docker Swarm:
 - docker swarm init --advertise-addr ...

Docker Stack:
 - docker network create mynet --driver=overlay
 - 04