# FootballBets

##Installer l'application depuis un projet Git.
1/ Récupérer le projet sur le serveur GitHub
2/ Lancer un PowerShell (ou command.com), se déplacer dans le répertoire racine du projet ainsi chargé.
3/ Lancer la commande de mise à jour :
	composer update
Les packages nécessaires sera alors rechargés/mis à jour dans le repository.
4/ Toujours dans ce répertoire, lancer la commande de "régénération" de la clé applicative
	php artisan key:generate
5/ Le lancement du serveur du projet peut alors se faire correctement :
	php artisan serve --port=8002



#Comment "construire" l'application "from scratch"
## Installation des outils
###Outil composer
Télécharger composer sur le site https://getcomposer.org puis l'installer.

###PHP
Télécharger la dernière version de PHP sur le site 
	https://windows.php.net/download/
ou  https://www.php.net/downloads.php

puis l'installer.

###NodeJS
Télécharger la dernière version de node.js sur le site
	https://nodejs.org/en/
puis l'installer.

###Laravel
Télécharger/installer laravel
En utilisant un "command line" (shell Unix ou cmd Windows), charger et installer avec composer :

composer global require laravel/installer

Normalement composer doit être dans le PATH

## Création d'un projet
Créer le projet ProjectName

composer create-project --prefer-dist laravel/laravel ProjectName

##Lancer le projet
Se déplacer dans le répertoire du projet et lancer la commande :<br/>

    php artisan serve --port=8000

Lancer un navi(bleu ?)gateur puis saisir l'adresse 

    http://127.0.0.1:8000
    
##Problème de fichier .env
Le fichier .env n'est pas envoyé sur Git (fait partie des fichiers ignorés).
Il faudra donc le recréer à partir du fichier .env.example.

###Modification paramétrage base MySQL
Changer la connexion MySQL avec les bonnes inforamtions...

##Problème de clé 
Au premier lancement, il risque de se produire l'erreur "Your app key is missing" 

    php artisan key:generate
    
Le site devrait alors être "opérationnel"...

#Créer une table
##Génération du script de la table
Il s'agit ici de créer le canevas de structure d'une table.
Seules les colonnes d'identifiant et de suivi (timestamp de création et de modification) seront générées dans le source.
Il suffit ensuite d'ajouter les propriétés de la table.

exemple :
	php artisan make:migration add_username_to_users --create=users
	php artisan make:migration add_username_to_users --table=users
	php artisan make:migration create_table_competition --table=Competition

##Création de la table dans la base de données
Une fois le script de la table terminé, il faut la créer dans la base de données.

	php artisan migrate

##Alimenter une table (SEED)
###Créer la classe de Seed par Objet

exemple :
	php artisan make:seeder NationTableSeeder
	
Cette opération créer une classe nommée NationTableSeeder, contenant la fonction run qui sera lancée pour alimenter la table avec les données.
Il suffit alors de modifier le code pour renseigner l'ensemble des enregistrements :

    DB::table('nation')->insert([
        ['cod' => 'AFG', 'lib' => 'Afghanistan'],
        ['cod' => 'NZL', 'lib' => 'New Zealand',],
        ...
        ]);

###Lancement du Seed
	php artisan db:seed NationTableSeeder
Commande
##Les colonnes "created_at" et "updated_at"
L'opération "DB:table('xxx')->insert" ne renseigne pas les 2 colonnes de types timestamps qui sont créées systématiquement lors de la création de la table.
Il faudra donc penser à les alimenter...
    'created_at' => now(),
    'updated_at' => now(),
La fonction now() fait partie de la classe Carbon\Carbon qu'il faudra prendre soin d'ajouter en tête de source.
    use Carbon\Carbon;
Cependant, par défaut, les dates sont au format UTC (-2h ou -1h par rapport à Paris). Il faut donc aller modifier dans le fichier confif/app.php la ligne de timezone :
    'timezone' => 'Europe/Paris',
(si l'on souhaite que cela soit Paris !)
    


##Eloquent Model Generator
	https://github.com/krlove/eloquent-model-generator
	https://github.com/pepijnolivier/Eloquent-Model-Generator
	--> https://github.com/JonathanGuo/eloquent-model-generator <--
