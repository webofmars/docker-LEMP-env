FROM debian:latest
MAINTAINER webofmars contact@webofmars.com

ENV USEPHP=false

RUN apt-get update -y --no-install-recommends -q
RUN apt-get upgrade -y --no-install-recommends -q
RUN apt-get install -y --no-install-recommends -q curl
RUN apt-get install -y --no-install-recommends -q netcat
RUN apt-get install -y --no-install-recommends -q lsof
RUN apt-get install -y --no-install-recommends -q tcpdump
RUN apt-get install -y --no-install-recommends -q nginx-full
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
RUN chown -R www-data:www-data /var/www/html

ADD ./data/nginx-config-switcher /usr/local/bin/

EXPOSE 80
EXPOSE 443

WORKDIR /etc/nginx
ENTRYPOINT /usr/local/bin/nginx-config-switcher
CMD ["nginx"]
VOLUME ["/etc/nginx", "/var/log/nginx", "/var/www/html"]
