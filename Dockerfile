FROM alpine:3.5 as intermediate

RUN apk update
RUN apk add git

RUN git clone https://github.com/torvey/docker-prestashop.git

FROM prestashop/prestashop:1.7.7.5

COPY --from=intermediate /docker-prestashop/html /var/www
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN rm -rf install/

RUN mkdir ssl
COPY ./docker/ssl/000-default.conf /ssl/000-default.conf
COPY ./docker/ssl/ssl.sh .
EXPOSE 80
EXPOSE 443
CMD ["bash", "ssl.sh"]
