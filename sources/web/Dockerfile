FROM debian:latest
RUN apt-get update -y --no-install-recommends -q &&        \
    apt-get upgrade -y --no-install-recommends -q &&       \
    apt-get install -y --no-install-recommends -q curl     \
                                                  netcat   \
                                                  lsof     \
                                                  tcpdump  \
                                                  nginx && \
    echo "\ndaemon off;" >> /etc/nginx/nginx.conf &&       \
    chown -R www-data:www-data /var/www/html

VOLUME ["/etc/nginx", "/var/log/nginx", "/var/www/html"]
WORKDIR /etc/nginx
CMD ["nginx"]
EXPOSE 80
EXPOSE 443
