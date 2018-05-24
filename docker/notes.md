Einfaches schnelles Beispiel:
 - docker container run --name nginx -p 80:80 nginx

Eigene Images:
 - docker image build -t mywebserver .
 - 01
 - https://hub.docker.com/

Umgebungsvariables und spezielle Versionen:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret mysql:5.7

Persistente Daten:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret -v /vagrant/mysql:/var/lib/mysql mysql:5.7

Docker compose:
 - docker volume create mysql 
 - 02
 
Mehrere Services
 - 03

Docker Swarm:
 - docker swarm init --advertise-addr ...

Docker Stack:
 - docker network create mynet --driver=overlay
 - 04