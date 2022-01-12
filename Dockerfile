FROM alpine:3.5 as intermediate

RUN apk update
RUN apk add git

RUN git clone https://github.com/torvey/docker-prestashop.git

FROM prestashop/prestashop:1.7.7.5

ARG DATABASE_HOST=admin-mysql_db
ARG DATABASE_PORT=''
ARG DATABASE_NAME=be_181291
ARG DATABASE_USER=be_181291
ARG DATABASE_PASSWORD=politechnika123
ARG DATABASE_PREFIX=ps_

COPY --from=intermediate /docker-prestashop/html .
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN rm -rf install/

RUN sed -i "s|'mariadb'|'${DATABASE_HOST}'|g" ./app/config/parameters.php
RUN sed -i "s|''|'${DATABASE_PORT}'|g" ./app/config/parameters.php
RUN sed -i "s|'prestashop'|'${DATABASE_NAME}'|g" ./app/config/parameters.php
RUN sed -i "s|'database_user' => 'root'|'database_user' => '${DATABASE_USER}'|g" ./app/config/parameters.php
RUN sed -i "s|'database_password' => 'root'|'database_password' => '${DATABASE_PASSWORD}'|g" ./app/config/parameters.php
RUN sed -i "s|'ps_'|'${DATABASE_PREFIX}'|g" ./app/config/parameters.php

RUN mkdir ssl
COPY ./docker/ssl/000-default.conf /ssl/000-default.conf
COPY ./docker/ssl/ssl.sh .
EXPOSE 80
EXPOSE 443
CMD ["bash", "ssl.sh"]
