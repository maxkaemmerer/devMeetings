Einfaches schnelles Beispiel:
 - docker container run --name nginx -p 80:80 nginx

Eigene Images:
 - 01

Umgebungsvariables und spzielle Versionen:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret mysql:5.7

Persistente Daten:
 - docker container run --name mysql -p 3306:3306 -d -e MYSQL_ROOT_PASSWORD=secret -v /vagrant/mysql:/var/lib/mysql mysql:5.7

Docker compose:
 - 02
 
Mehrere Services
 - docker volume create mysql
 - 03

Docker Swarm:
 - docker network create mynet --driver=overlay
 - 04