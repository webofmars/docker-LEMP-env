FROM webofmars/php-fpm:latest
MAINTAINER webofmars contact@webofmars.com
VOLUME ["/etc/php5", "/var/log"]
WORKDIR /var/www/html
ENTRYPOINT ["php5-fpm", "-F"]
EXPOSE 9200

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update -y -q

#git
RUN apt-get -y --no-install-recommends -q install git

# phalconisation
ADD ./data/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb /tmp/
RUN dpkg -i /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb && rm /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb
ADD ./data/phalcon-devtools /opt/phalcon-devtools
RUN ln -s /opt/phalcon-devtools/phalcon.php /usr/local/bin/phalcon
RUN chmod a+x /opt/phalcon-devtools/phalcon.php
