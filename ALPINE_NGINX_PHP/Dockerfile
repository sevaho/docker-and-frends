FROM alpine:latest

MAINTAINER Sebastiaan Van Hoecke

ENV DEBUG=true

RUN apk add --update nginx
RUN apk add php7-fpm php7-json php7-openssl php7-xml php7-posix php7-curl php7-mcrypt

RUN rm -rf /var/cache/apk/*

RUN mkdir -p /etc/nginx
RUN mkdir -p /var/run/php-fpm

COPY nginx/nginx.conf /etc/nginx/nginx.conf
COPY nginx/default.conf /etc/nginx/conf.d/default.conf
COPY fpm/php-fpm.conf /etc/php7/php-fpm.conf

ADD app /www
RUN chown -R nginx:nginx /www
WORKDIR /app
VOLUME /app

expose 80 443 9000

CMD ["nginx", "-g", "daemon off;"]
