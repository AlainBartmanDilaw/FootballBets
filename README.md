# FootballBets

Installer l'application depuis un projet Git.
1/ Récupérer le projet sur le serveur GitHub
2/ Lancer un PowerShell (ou command.com), se déplacer dans le répertoire racine du projet ainsi chargé.
3/ Lancer la commande de mise à jour :
	composer update
Les packages nécessaires sera alors rechargés/mis à jour dans le repository.
4/ Toujours dans ce répertoire, lancer la commande de "régénération" de la clé applicative
	php artisan key:generate
5/ Le lancement du serveur du projet peut alors se faire correctement :
	php artisan serve --port=8002



Comment "construire" l'application "from scratch"

1/ Télécharger composer sur le site https://getcomposer.org
   puis l'installer.

2/ Télécharger la dernière version de PHP sur le site 
	https://windows.php.net/download/
ou  https://www.php.net/downloads.php

puis l'installer.

3/ Télécharger la dernière version de node.js sur le site
	https://nodejs.org/en/

puis l'installer.

4/ Télécharger/installer laravel
En utilisant un "command line" (shell Unix ou cmd Windows), charger et intaller avec composer :

composer global require laravel/installer

Normalement composer doit être dans le PATH

5/ Créer le projet ProjectName

composer create-project --prefer-dist laravel/laravel ProjectName

6/ Lancer le projet

a/
Se déplacer dans le répertoire du projet et lancer la commande :
php artisan serve --port=8000

Lancer un navi(bleu ?)gateur puis saisir l'adresse 

http://127.0.0.1:8000

7/ Créer une table
php artisan make:migration add_username_to_users --table=users
php artisan migrate

