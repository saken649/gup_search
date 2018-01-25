FROM mysql:5.7
RUN chmod 777 /var/log/mysql \
    && touch /var/log/mysql/query.log /var/log/mysql/slow_query.log \
    && chmod 777 /var/log/mysql/query.log /var/log/mysql/slow_query.log
COPY ./mysql.conf.d /etc/mysql/mysql.conf.d