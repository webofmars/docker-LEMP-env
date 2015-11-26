docker-LEMP
=============================================================

## Introduction
docker-LEMP is a project to help developpers & devops working on differents web technologies. 

With docker-LEMP you can run a local small server including :
- a web server (nginx)
- a application server (PHP-FPM or PHP-FPM phalcon version)
- a DB server (MySQL)
- a memcached server
- a e-mail server
- some interrestings stats with blackfire.io
- data ready for search with elasticsearch

and also give you production/network administrator a solid base to know how this should be deployed in production environment.

In many aspect you can compare it to wamp, xampp, or any equivalent but based on modern containers LXC technology (Docker).

The tool is totaly compatible with many applications & Framework :
- Simple web site
- Simple PHP application
- Symfony2
- Laravel
- Wordpress
- Drupal
- Phalcon
- Joomla
- and many more ! 

## Under the hood
Under the hood, for people already aware of how docker is working docker-LEMP is based on the following images :

- webofmars/nginx (based on official debian lenny image)
- webofmars/php-fpm (based on official debian lenny image)
- webofmars/php-fpm-phalcon (based on official debian lenny image)
- mysql (official)
- memcached (official)
- djfarrelly/maildev
- blackfire/blackfire
- djfarrelly/maildev
- elastichsearch

[![](https://badge.imagelayers.io/webofmars/nginx:latest.svg)](https://imagelayers.io/?images=webofmars/nginx:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/webofmars/php-fpm:latest.svg)](https://imagelayers.io/?images=webofmars/php-fpm:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/webofmars/php-fpm-phalcon:latest.svg)](https://imagelayers.io/?images=webofmars/php-fpm-phalcon:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/mysql:latest.svg)](https://imagelayers.io/?images=mysql:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/memcached:latest.svg)](https://imagelayers.io/?images=memcached:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/djfarrelly/maildev:latest.svg)](https://imagelayers.io/?images=djfarrelly/maildev:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/blackfire/blackfire:latest.svg)](https://imagelayers.io/?images=blackfire/blackfire:latest 'Get your own badge on imagelayers.io') [![](https://badge.imagelayers.io/elasticsearch:latest.svg)](https://imagelayers.io/?images=elasticsearch:latest 'Get your own badge on imagelayers.io')

## Issues :

- Use github to open & track issues you might enconter

