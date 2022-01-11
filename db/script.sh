#!/bin/bash

mysql -pstudent -e "CREATE DATABASE IF NOT EXISTS be_181291;"
mysql -pstudent -e "CREATE USER IF NOT EXISTS be_181291@'%' IDENTIFIED BY 'politechnika123';"
mysql -pstudent -e "GRANT ALL PRIVILEGES ON be_181291.* TO be_181291@'%';"
mysql -pstudent -e "FLUSH PRIVILEGES;"
mysql -u be_181291 -ppolitechnika123 be_181291 < /tmp/prestashop.sql