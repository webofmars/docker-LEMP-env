FROM debian:latest
MAINTAINER webofmars contact@webofmars.com

# FIX write permissions to the app
ENV BOOT2DOCKER_ID 1000
ENV BOOT2DOCKER_GID 50
RUN usermod -u ${BOOT2DOCKER_ID} www-data && \
    usermod -G staff www-data
RUN groupmod -g $(($BOOT2DOCKER_GID + 10000)) $(getent group $BOOT2DOCKER_GID | cut -d: -f1)
RUN groupmod -g ${BOOT2DOCKER_GID} staff

ENV USEPHP=false
ENV USEPHALCON=false

RUN apt-get update -y --no-install-recommends -q
RUN apt-get upgrade -y --no-install-recommends -q
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
