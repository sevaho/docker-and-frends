FROM alpine

WORKDIR /app
VOLUME /app
COPY run.sh /run.sh

RUN apk add --update mysql mysql-client && rm -f /var/cache/apk/*
COPY my.cnf /etc/mysql/my.cnf

RUN chmod 777 /run.sh

EXPOSE 3306
CMD ["/run.sh"]


