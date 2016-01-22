FROM debian:latest 
MAINTAINER webofmars contact@webofmars.com

RUN apt-get -y --no-install-recommends -q update
RUN apt-get -y --no-install-recommends -q upgrade

RUN apt-get -y --no-install-recommends -q install php5-fpm php5-cli php5-common php5-curl php5-gd php5-imagick php5-intl php5-json php5-mcrypt php5-mysqlnd php5-readline php5-recode php5-tidy php5-xsl php5-imagick imagemagick php-apc php5-apcu

# less standard packages, open an issue to add some
RUN apt-get -y --no-install-recommends -q install php-aws-sdk php-google-api-php-client php5-lasso php-date php-file php5-geoip php-gettext php5-json php-mail php5-memcache php5-memcached php-mime-type php5-mysqlnd-ms php-net-checkip php-net-smtp php-net-socket php-net-url php-openid php-services-json php5-ssh2 phpunit

#git
RUN apt-get -y --no-install-recommends -q install git

# blackfire
RUN apt-get -y --no-install-recommends -q install curl
RUN export VERSION=`php -nr "echo PHP_MAJOR_VERSION.PHP_MINOR_VERSION;"` \
    && curl -A "Docker" -o /tmp/blackfire-probe.tar.gz -D - -L -s https://blackfire.io/api/v1/releases/probe/php/linux/amd64/${VERSION} \
    && tar zxpf /tmp/blackfire-probe.tar.gz -C /tmp \
    && mv /tmp/blackfire-*.so `php -r "echo ini_get('extension_dir');"`/blackfire.so \
    && echo "extension=blackfire.so\nblackfire.agent_socket=\${BLACKFIRE_PORT}" > /etc/php5/fpm/conf.d/99-blackfire.ini

ADD ./data/php5 /etc/php5
ADD ./data/composer.phar /usr/local/bin/composer

VOLUME ["/etc/php5", "/var/log"]
WORKDIR /etc/php5
ENTRYPOINT ["php5-fpm", "-F"]
EXPOSE 9200
