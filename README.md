Docker dev platform - Version 1.12
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
- for Nginx + PHP avec phalcon         : run-LEP-phalcon
- for Nginx + PHP + mysql              : run-LEMP
- for Nginx + PHP avec phalcon + mysql : run-LEMP-phalcon

=============================================================
## Changelog :
v1.12:
- BUGFIX: run-LEMP ne tournait pas à cause d'un répertoire vide.

v1.11:
- modification des tailles d'upload dans PHP et nginx
- ajout d'une page d'acceuil
- ajout d'un moyen de vider la cache APCu
- ajout d'un script pour changer les permissions des sites déployés
- fix pour le bug OSX avec MySQL
- ajout de nombreux paquets pour PHP
- Configuration du rewrite pour phalcon
- Activation du microcaching Nginx & PHP

v1.10:
- corrige un problème de montage avec les volumes php5-fpm-phalcon. Ils seront dorénavant montés.

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

- Utilisez github pour en ouvrir si besoin.
