Docker dev platform - Version 1.3
=============================================================

	- based on webofmars images (std debian jessy)
	- nginx
    - php5-fpm
	- mysql

=============================================================
# Usage :

- for Nginx alone                      : run-LE
- for Nginx + PHP                      : run-LEP
- for Nginx + PHP avec phalcon         : run-LEP-with-phalcon
- for Nginx + PHP + mysql              : run-LEMP
- for Nginx + PHP avec phalcon + mysql : run-LEMP-with-phalcon

=============================================================
# Changelog :

v1.3 :
- ajout du support de Phalcon

v1.2 :
- ajout de composer dans php5-fpm
- ajout de la possibilité de modifier le paramétrage php pour php5-fpm
- reorganisation des sources
- ajout de binaires de lancement

# Issues :

- Pour le moment il semble que faire tourner mysql avec un volume partagé sur OSX soit un vrai souci avec les versions de dockers actuelles. Si vous rencontrez le problème, commentez juste les volumes mysql dans les fichiers YML.
