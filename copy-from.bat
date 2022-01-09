@echo off

docker cp docker-prestashop_prestashop_1:/var/www/html .
docker exec -it docker-prestashop_mysql_1 mysqldump -u root -proot prestashop > ./docker/mariadb/prestashop.sql  
