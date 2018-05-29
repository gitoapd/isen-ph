Installation du site web en local sous Windows
==============

* Télécharger **EasyPHP** OU **WAMP** (plate-formes de développement Web)
* Télécharger le dossier **pyramide.zip**
* L'extraire (dézipper), et placer le dossier à la racine de serveur, dans le dossier **eds-www** pour EasyPHp, dans le dossier **www** pour Wamp
	
Ce dossier est situé dans C:\Program Files (x86)\EasyPHP-Devserver-16.1\	--> pour EasyPHP

Ce dossier est situé dans C:\wamp64\	--> pour WAMP

* Ouvrir le fichier **config.php**

Ce fichier se situe dans C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\pyramide\application\config

Ce fichier se situe dans C:\wamp64\www\pyramide\application\config

* Changer la variable `$config['base_url']` avec vos paramètres

! ATTENTION !

C'est l'URL que vous devrez taper pour accéder au site

Si vous ne souhaitez pas changer le nom du dossier contenant les sources (le dossier "pyramide"), ne changez pas cette valeur.

* Veuillez à bien lancer EasyPhp/WAMP

* Pour se rendre sur le site, entrer dans le navigateur l'URL selon le schéma suivant:
				
`$config['base_url'] + projet/home`

Exemple
--------

Si	`$config['base_url'] = 'http://localhost/pyramide/';`

URL	`http://localhost/pyramide/projet/home`