Docker dev platform - Version 1.9
=============================================================

    - based on webofmars images (std debian jessy)
    - nginx
    - php5-fpm
    - phalcon (PHP engine sous stéroides)
    - mysql

=============================================================
## Usage :

- for Nginx alone                      : run-LE
- for Nginx + PHP                      : run-LEP
- for Nginx + PHP avec phalcon         : run-LEP-with-phalcon
- for Nginx + PHP + mysql              : run-LEMP
- for Nginx + PHP avec phalcon + mysql : run-LEMP-with-phalcon

=============================================================
## Changelog :

v1.9:
- PHP improvements
- better gitignore file

v1.8:
- phalcon bugfix

v1.7:
- réorganisation des fichiers
- coorection d'un bug lié au dernier commit (chemin relatif)
- coorection du run-LE qui ne marchait plus sans PHP (ce qui n'est pas le but)

v1.6:
- bugfix mineur

v1.5:
- ajout de imagemagick et de son support PHP
- image phalcon basée sur webofmars/php-fpm

v1.4 :
- ajout de PhpMyAdmin

v1.3 :
- ajout du support de Phalcon

v1.2 :
- ajout de composer dans php5-fpm
- ajout de la possibilité de modifier le paramétrage php pour php5-fpm
- reorganisation des sources
- ajout de binaires de lancement

## Issues :

- Pour le moment il semble que faire tourner mysql avec un volume partagé sur OSX soit un vrai souci avec les versions de dockers actuelles. Si vous rencontrez le problème, commentez juste les volumes mysql dans les fichiers YML.
