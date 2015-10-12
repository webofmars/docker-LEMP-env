FROM webofmars/php-fpm:latest
MAINTAINER webofmars contact@webofmars.com
VOLUME ["/etc/php5", "/var/log"]
WORKDIR /etc/php5
CMD ["php5-fpm", "-F"]
EXPOSE 9200
COPY ./data/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb /tmp/
RUN dpkg -i /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb && rm /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb
COPY ./data/phalcon-devtools /opt/phalcon-devtools
RUN ln -s /opt/phalcon-devtools/phalcon.php /usr/local/bin/phalcon
RUN chmod a+x /opt/phalcon-devtools/phalcon.php
