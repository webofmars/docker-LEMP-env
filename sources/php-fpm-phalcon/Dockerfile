FROM debian:latest 
RUN apt-get -y --no-install-recommends -q update  &&          \
    apt-get -y --no-install-recommends -q upgrade &&          \
    apt-get -y --no-install-recommends -q install php5-fpm    \
                                                php5-cli      \
                                                php5-common   \
                                                php5-curl     \
                                                php5-gd       \
                                                php5-imagick  \
                                                php5-intl     \
                                                php5-json     \
                                                php5-mcrypt   \
                                                php5-mysqlnd  \
                                                php5-readline \
                                                php5-recode   \
                                                php5-tidy     \
                                                php5-xsl      \
                                                php-apc       \
                                                php5-apcu
VOLUME ["/etc/php5", "/var/log"]
WORKDIR /etc/php5
CMD ["php5-fpm", "-F"]
EXPOSE 9200
COPY ./data/php5 /etc/php5
COPY ./data/composer.phar /usr/local/bin/composer
COPY ./data/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb /tmp/
RUN dpkg -i /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb && rm /tmp/php5-phalcon_2.0.7-ppa1~vivid_amd64.deb
COPY ./data/phalcon-devtools /opt/phalcon-devtools
RUN ln -s /opt/phalcon-devtools/phalcon.php /usr/local/bin/phalcon
RUN chmod a+x /opt/phalcon-devtools/phalcon.php
