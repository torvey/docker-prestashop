@echo off

docker cp docker-prestashop-prestashop-1:/var/www/html .
docker exec -it docker-prestashop-mariadb-1 mysqldump -u root -proot prestashop > ./docker/mariadb/prestashop.sql  
