FROM debian:latest 
MAINTAINER webofmars contact@webofmars.com

RUN apt-get -y --no-install-recommends -q update
RUN apt-get -y --no-install-recommends -q upgrade

RUN apt-get -y --no-install-recommends -q install php5-fpm
RUN apt-get -y --no-install-recommends -q install php5-cli
RUN apt-get -y --no-install-recommends -q install php5-common
RUN apt-get -y --no-install-recommends -q install php5-curl
RUN apt-get -y --no-install-recommends -q install php5-gd
RUN apt-get -y --no-install-recommends -q install php5-imagick
RUN apt-get -y --no-install-recommends -q install php5-intl
RUN apt-get -y --no-install-recommends -q install php5-json
RUN apt-get -y --no-install-recommends -q install php5-mcrypt
RUN apt-get -y --no-install-recommends -q install php5-mysqlnd
RUN apt-get -y --no-install-recommends -q install php5-readline
RUN apt-get -y --no-install-recommends -q install php5-recode
RUN apt-get -y --no-install-recommends -q install php5-tidy
RUN apt-get -y --no-install-recommends -q install php5-xsl
RUN apt-get -y --no-install-recommends -q install php5-imagick
RUN apt-get -y --no-install-recommends -q install imagemagick
RUN apt-get -y --no-install-recommends -q install php-apc
RUN apt-get -y --no-install-recommends -q install php5-apcu

# less standard packages, open an issue to add some
RUN apt-get -y --no-install-recommends -q install php-aws-sdk
RUN apt-get -y --no-install-recommends -q install php-google-api-php-client
RUN apt-get -y --no-install-recommends -q install php5-lasso
RUN apt-get -y --no-install-recommends -q install php-date
RUN apt-get -y --no-install-recommends -q install php-file
RUN apt-get -y --no-install-recommends -q install php5-geoip
RUN apt-get -y --no-install-recommends -q install php-gettext
RUN apt-get -y --no-install-recommends -q install php5-json
RUN apt-get -y --no-install-recommends -q install php-mail
RUN apt-get -y --no-install-recommends -q install php5-memcache
RUN apt-get -y --no-install-recommends -q install php5-memcached
RUN apt-get -y --no-install-recommends -q install php-mime-type
RUN apt-get -y --no-install-recommends -q install php5-mysqlnd-ms
RUN apt-get -y --no-install-recommends -q install php-net-checkip
RUN apt-get -y --no-install-recommends -q install php-net-smtp
RUN apt-get -y --no-install-recommends -q install php-net-socket
RUN apt-get -y --no-install-recommends -q install php-net-url
RUN apt-get -y --no-install-recommends -q install php-openid
RUN apt-get -y --no-install-recommends -q install php-services-json
RUN apt-get -y --no-install-recommends -q install php5-ssh2
RUN apt-get -y --no-install-recommends -q install phpunit

ADD ./data/php5 /etc/php5
ADD ./data/composer.phar /usr/local/bin/composer

VOLUME ["/etc/php5", "/var/log"]
WORKDIR /etc/php5
ENTRYPOINT ["php5-fpm", "-F"]
EXPOSE 9200
