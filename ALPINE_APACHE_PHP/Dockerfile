FROM alpine:latest

MAINTAINER Sebastiaan Van Hoecke

RUN apk --update add apache2 apache2-utils php7-apache2 php7-pdo_mysql php7-pdo php7-pdo_pgsql php7-mysqli php7-json php7 php7-mcrypt php7-xml php7-ctype
RUN rm -rf /var/cache/apk/*

RUN sed -i "s#/var/www/localhost/htdocs#/app#g" /etc/apache2/httpd.conf
RUN sed -i "s#AllowOverride none#AllowOverride All#" /etc/apache2/httpd.conf
RUN sed -i "s,#LoadModule rewrite_module modules/mod_rewrite.so,LoadModule rewrite_module modules/mod_rewrite.so,g" /etc/apache2/httpd.conf 
RUN echo ServerName ${HOSTNAME} >> /etc/apache2/httpd.conf

RUN mkdir -p /app
RUN chown apache:apache /app
RUN mkdir -p /run/apache2

ADD run.sh /run.sh
ADD app /app

WORKDIR /app
VOLUME /app

RUN chmod 777 /run.sh

EXPOSE 80 443

ENTRYPOINT ["/run.sh"]
