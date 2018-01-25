FROM amazonlinux:latest
RUN rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm \
    && yum -y update \
    && yum -y install httpd \
        mod_php71w \
        php71w-opcache \
        php71w-cli \
        php71w-common \
        php71w-devel \
        php71w-mbstring \
        php71w-mysql \
        php71w-pdo \
        php71w-pear \
        php71w-pecl-redis \
        php71w-pecl-xdebug \
        php71w-xml
COPY ./conf/xdebug.ini /etc/php.d/
COPY ./conf/httpd.conf /etc/httpd/conf